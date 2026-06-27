<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\ActivityLog;

use App\Services\EncryptionService;
use App\Services\RSAService;
use App\Services\LSBService;

class DecryptController extends Controller
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
        return view('decrypt');
    }

    public function decrypt(Request $request)
    {
        $request->validate([
            'encrypted_file' => ['required','file'],
            'stego_image' => ['required','image']
        ]);

        try {

            $encFile = $request->file('encrypted_file');
            $pngFile = $request->file('stego_image');

            $encPath = $encFile->getRealPath();
            $pngPath = $pngFile->getRealPath();

            $payload = $this->lsbService
                ->extractMessage($pngPath);

            $parts = explode("||", $payload);

            if (count($parts) != 2) {
                throw new \Exception("Payload invalid");
            }

            $encryptedAESKey = $parts[0];
            $iv = base64_decode($parts[1]);

            $aesKey = $this->rsaService
                ->decryptAESKey($encryptedAESKey);

            $encryptedContent = file_get_contents(
                $encPath
            );

            $decrypted = $this->encryptionService
                ->decryptFile(
                    $encryptedContent,
                    $aesKey,
                    $iv
                );

            $uploadedEncName =
                $encFile->getClientOriginalName();

            $nameParts = explode(
                "_",
                $uploadedEncName
            );

            $originalExtension =
                $nameParts[count($nameParts)-1];

            $originalExtension =
                str_replace(
                    ".enc",
                    "",
                    $originalExtension
                );

            $filename =
                'recovered_'
                . time()
                . '.'
                . $originalExtension;

            $outputPath = storage_path(
                'app/private/' . $filename
            );

            file_put_contents(
                $outputPath,
                $decrypted
            );

            /*
            ACTIVITY LOG DECRYPT
            */
            ActivityLog::create([
                'user_id' => Auth::id(),
                'activity' =>
                    'Decrypted file: '
                    . $uploadedEncName
            ]);

            return response()
                ->download($outputPath)
                ->deleteFileAfterSend(true);

        } catch (\Exception $e) {

            return back()->with(
                'error',
                $e->getMessage()
            );
        }
    }
}
