<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Typemessage extends Model
{
    protected $fillable=['nom','codem'];
    protected $table='typemessages';

    public function modele()
    {
    	return $this->hasMany('App\Modele');
    }
}
