<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorAvailibility extends Model
{
    use HasFactory;
    /*
     Tables Relationships
    */
    public function users(){
        return $this->belongsTo(User::class);
    }
}
