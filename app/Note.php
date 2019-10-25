<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /*protected $fillable = [
        'name',
        'description'
    ]*/
   
    protected $guarded = [];
   
    public function tasks(){
        return $this->hasMany(Task::class);
    }
    public function addTask($task){
        $this->tasks()->create($task);
    }
}
