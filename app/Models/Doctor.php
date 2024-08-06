<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Competency;
class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'competency_id',
    ];
  
    public function Competency()
    {
        return $this->belongsTo(Competency::class);
    }
    public function Ratings()
    {
        return $this->hasMony(Raring::class);
    }

}
