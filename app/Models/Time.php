<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;
use App\Models\User;
class Time extends Model
{
    use HasFactory;
  
    protected $fillable=[
       'doctor_id',
       'patient_id',
       'date',  
       'hour'
    ];

      public function doctor(){
      return $this->belongsTo(Doctor::class);
      }

      public function user(){
       return $this->belongsTo(User::class);
       }



}
