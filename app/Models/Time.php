<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    public function Doctor(){
        return $this->belongsTo(Doctor::class);   
    }
    public function patient(){
        return $this->belongsTo(patient::class);   
    }
    public function State(){
        return $this->hasOne(State::class);   
    }
}
