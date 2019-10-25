<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Note;
class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }
    
    public function create()
    {
        return view('notes.create');
    }
    
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }
    
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    
    public function update(Note $note)
    {
        $note->update(request(['name', 'description']));        
        return redirect('/note');
    }
    
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect('/note');
    }
    
    public function store()
    {
        request()->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'description' => 'required'
        ]);
        Note::create(request(['name', 'description']));
        return redirect('/note');
    }
}


 