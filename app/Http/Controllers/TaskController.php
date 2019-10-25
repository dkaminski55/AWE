<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Note;
class TaskController extends Controller
{
    public function update(Task $task){
        $task->update([
            'completed' => request()->has('completed')
        ]);
        
        return back();
    }
    
    public function store(Note $note){
       /* Task::create([
            'note_id' => $note->id,
            'description' => request('description')
        ]);*/
       
        $attributes = request()->validate(['description' => 'required']);
        
        $note->addTask($attributes); 
        
        return back();
    }
}
