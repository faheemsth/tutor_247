<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    /*
     Tables Relationships
    */
    public function creditHours(){
        return $this->hasmany(CreditHour::class);
    }
    public function tutorSubjectOffer(){
        return $this->hasmany(TutorSubjectOffer::class);
    }
    public function tutorReview(){
        return $this->hasmany(TutorReview::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function levels(){
        return $this->belongsTo(Level::class);
    }
}
