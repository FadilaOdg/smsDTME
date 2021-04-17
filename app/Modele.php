<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Modele extends Model
{
    protected $fillable=['libelle','typemessages_codem'];
    protected $table='modeles';

    public function typemessage()
    {
        return $this->belongsTo('App\Typemessage','typemessages_codem','codem');
    }
}
