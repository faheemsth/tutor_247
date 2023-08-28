<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    /*
     Making Table Relations
    */
    public function roleHasPermission(){
        return $this->hasone(roleHasPermission::class);
    }
}
