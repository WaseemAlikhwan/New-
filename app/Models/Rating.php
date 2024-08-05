<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
    'doctor_id' ,
    'patient_id' ,
     'rate',
    ];
    public function Doctor(){
        return $this->belongsTo(Doctor::class);   
    }
    public function patient(){
        return $this->belongsTo(patient::class);   
    }
    
    
}
