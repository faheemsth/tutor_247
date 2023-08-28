<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorQualification extends Model
{
    use HasFactory;
    /*
     Making Table Relations
    */
    public function tutorQualificationAttachement(){
        return $this->hasmany(TutorQualificationAttachement::class);
    }
}
