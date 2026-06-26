<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Document;

class DocumentController extends Controller
{
    // tampilkan halaman upload
    public function index()
    {
        return view('upload');
    }

    // proses upload file
    public function store(Request $request)
    {
        // validasi file
        $request->validate([
            'document' => 'required|mimes:pdf,docx,txt|max:10240'
        ]);

        // ambil file
        $file = $request->file('document');

        // generate nama unik
        $filename = time() . '_' . $file->getClientOriginalName();

        // simpan ke storage/app/documents
        $path = $file->storeAs('documents', $filename);

        // simpan metadata ke database
        Document::create([
            'user_id'       => Auth::id(),
            'original_name' => $file->getClientOriginalName(),
            'encrypted_file'=> '-', // belum dienkripsi
            'file_type'     => $file->getClientOriginalExtension(),
            'file_size'     => $file->getSize(),
            'status'        => 'uploaded'
        ]);

        return redirect()
            ->back()
            ->with('success', 'File berhasil diupload!');
    }
}
