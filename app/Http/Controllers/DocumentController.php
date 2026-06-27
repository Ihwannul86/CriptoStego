<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Models\Document;
use App\Models\EncryptionKey;
use App\Models\StegoImage;
use App\Models\ActivityLog;

use App\Services\EncryptionService;
use App\Services\RSAService;
use App\Services\LSBService;

class DocumentController extends Controller
{
    protected $encryptionService;
    protected $rsaService;
    protected $lsbService;

    public function __construct(
        EncryptionService $encryptionService,
        RSAService $rsaService,
        LSBService $lsbService
    ) {
        $this->encryptionService = $encryptionService;
        $this->rsaService = $rsaService;
        $this->lsbService = $lsbService;
    }

    public function index()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'document' => [
                'required',
                'file',
                'mimes:pdf,docx,txt',
                'max:10240'
            ],
            'cover_image' => [
                'required',
                'image',
                'max:5120'
            ]
        ]);

        DB::beginTransaction();

        try {

            $file = $request->file('document');
            $originalName = $file->getClientOriginalName();
            $fileContent = file_get_contents($file);

            // AES
            $aesKey = $this->encryptionService->generateKey();
            $iv = $this->encryptionService->generateIV();

            $encryptedData = $this->encryptionService
                ->encryptFile($fileContent, $aesKey, $iv);

            // RSA
            $encryptedAESKey = $this->rsaService
                ->encryptAESKey($aesKey);

            // save encrypted file with extension
            $originalExtension =
                $file->getClientOriginalExtension();

            $encryptedFilename =
                uniqid('enc_')
                . '_'
                . $originalExtension
                . '.enc';

            Storage::put(
                'encrypted/' . $encryptedFilename,
                $encryptedData
            );

            // save document db
            $document = Document::create([
                'user_id' => Auth::id(),
                'original_name' => $originalName,
                'encrypted_file' => $encryptedFilename,
                'file_type' => $originalExtension,
                'file_size' => $file->getSize(),
                'status' => 'encrypted'
            ]);

            // save key db
            EncryptionKey::create([
                'document_id' => $document->id,
                'encrypted_aes_key' => $encryptedAESKey,
                'public_key' => $this->rsaService->getPublicKey(),
                'private_key' => $this->rsaService->getPrivateKey(),
                'iv' => $this->encryptionService->encodeIV($iv)
            ]);

            // cover image
            $coverImage = $request->file('cover_image');
            $coverImageName = uniqid('img_') . '.png';

            Storage::putFileAs(
                'stego_images',
                $coverImage,
                $coverImageName
            );

            $inputPath = storage_path(
                'app/private/stego_images/' . $coverImageName
            );

            $stegoImageName = uniqid('stego_') . '.png';

            $outputPath = storage_path(
                'app/private/stego_images/' . $stegoImageName
            );

            $payload = $encryptedAESKey .
                       '||' .
                       base64_encode($iv);

            $this->lsbService->embedMessage(
                $inputPath,
                $payload,
                $outputPath
            );

            StegoImage::create([
                'document_id' => $document->id,
                'image_name' => $stegoImageName,
                'stego_image_path' => $outputPath,
                'stego_method' => 'LSB'
            ]);

            /*
            ACTIVITY LOG UPLOAD
            */
            ActivityLog::create([
                'user_id' => Auth::id(),
                'activity' =>
                    'Uploaded & Encrypted file: '
                    . $originalName
            ]);

            DB::commit();

            return redirect()
                ->route('dashboard')
                ->with(
                    'success',
                    'AES + RSA + LSB Steganography SUCCESS!'
                );

        } catch (\Exception $e) {

            DB::rollBack();
            dd($e->getMessage());
        }
    }

    public function downloadEncrypted($id)
    {
        $document = Document::findOrFail($id);

        $path = storage_path(
            'app/private/encrypted/' . $document->encrypted_file
        );

        return response()->download($path);
    }

    public function viewStegoImage($id)
    {
        $document = Document::findOrFail($id);

        if (!$document->stegoImage) {
            return redirect()
                ->route('dashboard')
                ->with('error', 'Stego image not found');
        }

        return response()->file(
            $document->stegoImage->stego_image_path
        );
    }

    public function downloadStegoImage($id)
    {
        $document = Document::findOrFail($id);

        if (!$document->stegoImage) {
            return redirect()
                ->route('dashboard')
                ->with('error', 'Stego image not found');
        }

        return response()->download(
            $document->stegoImage->stego_image_path
        );
    }

    public function deleteDocument($id)
    {
        $document = Document::findOrFail($id);

        DB::beginTransaction();

        try {

            Storage::delete(
                'encrypted/' . $document->encrypted_file
            );

            if ($document->stegoImage) {

                $stegoPath = $document->stegoImage->stego_image_path;

                if (file_exists($stegoPath)) {
                    unlink($stegoPath);
                }

                $document->stegoImage->delete();
            }

            if ($document->encryptionKey) {
                $document->encryptionKey->delete();
            }

            /*
            ACTIVITY LOG DELETE
            */
            ActivityLog::create([
                'user_id' => Auth::id(),
                'activity' =>
                    'Deleted file: '
                    . $document->original_name
            ]);

            $document->delete();

            DB::commit();

            return redirect()
                ->route('dashboard')
                ->with(
                    'success',
                    'Document deleted successfully!'
                );

        } catch (\Exception $e) {

            DB::rollBack();
            dd($e->getMessage());
        }
    }
}
