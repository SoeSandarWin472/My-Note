<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $notes = Note::simplePaginate(10);
        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('notes.create');
       
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description'=>'required|string|max:500',
            'status' => 'required|boolean',
        ]);

        $note = new Note();
        $note->title = $validatedData['title'];
        $note->description = $validatedData['description'];
        $note->status = $validatedData['status'];
        $note->save();

        return redirect('notes')->with('message', 'Note created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
        return view('notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description'=>'required|string|max:500',
            'status' => 'required|boolean',
        ]);

        $note->title = $validatedData['title'];
        $note->description = $validatedData['description'];
        $note->status = $validatedData['status'];
        $note->update();

        
        return redirect('notes')->with('message', 'Note updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($note_id)
    {
        //
        $note = Note::findOrFail($note_id);
        $note->delete();
        return redirect('notes')->with(
            'message',
            'Note Deleted Successfully'
        );
       
    }
}
