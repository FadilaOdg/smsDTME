<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //'name', 'email', 'password',
        'name', 'prenom', 'fonction', 'departement', 'service', 'division', 'telephone', 'email', 'password','typeusers_code',
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
    protected $table="users";

    public function typeuser()
    {
        return $this->belongsTo('App\Typeuser','typeusers_code','code');
    }

   // public function isAdmin()
   /// {
    //    return $this->typeusers_code()->where('code','0')->first();
    //}

   // public function hasAnyTypeusers_code(array $typeusers)
    //{
      //  return $this->typeusers_code()->whereIn('code', $typeusers)->first();
    //}

}