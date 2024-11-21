<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClearanceController extends Controller
{
    
    public function upload(Request $request)
{
    $request->validate([
        'department_id' => 'required|exists:departments,id',
        'document' => 'required|file|mimes:pdf,doc,docx',
    ]);

    $path = $request->file('document')->store('documents');

    Clearance::updateOrCreate(
        ['user_id' => auth()->id(), 'department_id' => $request->department_id],
        ['cleared' => true, 'document_path' => $path]
    );

    return redirect()->route('clearance.index')->with('success', 'Document uploaded successfully.');
}


public function index()
{
    $departments = Department::all();
    $clearances = Clearance::where('user_id', auth()->id())->get();
    $clearedCount = $clearances->where('cleared', true)->count();
    $progress = ($clearedCount / $departments->count()) * 100;

    return view('clearance.index', compact('departments', 'progress'));
}


}
