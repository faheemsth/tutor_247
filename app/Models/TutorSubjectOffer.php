<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorSubjectOffer extends Model
{
    use HasFactory;
    /*
     Tables Relationships
    */
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function levels(){
        return $this->belongsTo(Level::class);
    }
    public function subjects(){
        return $this->belongsTo(Subject::class);
    }
}