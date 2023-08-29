<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }


    public function get_roles()
    {
        $roles = [];
        foreach ($this->getRoleNames() as $key => $role) {
            $roles[$key] = $role;

        }

        return $roles;
    }
    /*
     Tables Relationships
    */
    public function subjects(){
        return $this->hasmany(Subject::class);
    }

    public function tutorQualification(){
        return $this->hasmany(tutorQualification::class);
    }
    public function tutorExperience(){
        return $this->hasmany(tutorExperience::class);
    }
    public function tutorAvailibility(){
        return $this->hasone(tutorAvailibility::class);
    }
    public function tutorSubjectOffer(){
        return $this->hasmany(tutorSubjectOffer::class);
    }
    public function booking(){
        return $this->hasone(Booking::class);
    }
    public function creditHours(){
        return $this->hasmany(creditHours::class);
    }
    public function role(){
        return $this->hasone(Role::class);
    }
    public function level(){
        return $this->hasmany(Level::class);
    }
    public function userAccountDetails(){
        return $this->hasmany(UserAccountDetail::class);
    }
    public function wallet(){
        return $this->hasone(Wallet::class);
    }
    public function companyWallet(){
        return $this->hasone(CompanyWallet::class);
    }
    public function transaction(){
        return $this->hasmany(Transaction::class);
    }
    public function orders(){
        return $this->hasmany(Order::class);
    }
    public function tutorReview(){
        return $this->hasone(TutorReview::class);
    }
}























