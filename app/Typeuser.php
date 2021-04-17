<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeuser extends Model
{
	protected $table="typeusers";
	protected $fillable=['name','code'];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
