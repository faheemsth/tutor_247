<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    /*
     Making Table Relations
    */
    public function subjects(){
        return $this->hasmany(Subject::class);
    }
    public function tutorSubjectOffer(){
        return $this->hasmany(TutorSubjectOffer::class);
    }
}
