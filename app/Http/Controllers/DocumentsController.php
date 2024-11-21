<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{
    public function index()
    {
        // Fetch documents from the database
        $documents = Document::all();
        return view('documents', compact('documents'));
    }
  

    public function upload(Request $request)
    {
        $request->validate([
            'document' => 'required|mimes:pdf,doc,docx|max:2048', // Adjust validation rules as needed
        ]);

        $file = $request->file('document');
        $filePath = $file->store('documents', 'public');

        // Save file details to the database
        Document::create([
            'file_name' => $file->getClientOriginalName(),
            'file_path' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Document uploaded successfully.');
    }
}
