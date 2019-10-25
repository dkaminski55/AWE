<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    public function note(){
        return $this->belongsTo(Note::class);
    }
}
