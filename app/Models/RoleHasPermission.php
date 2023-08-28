<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleHasPermission extends Model
{
    use HasFactory;
    /*
     Making Table Relations
    */
    public function permission(){
        return $this->hasone(Permission::class);
    }
}
