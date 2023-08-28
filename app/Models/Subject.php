<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    /*
     Making Table Relations
    */
    public function creditHours(){
        return $this->hasmany(CreditHour::class);
    }
    public function tutorSubjectOffer(){
        return $this->hasmany(TutorSubjectOffer::class);
    }
}
