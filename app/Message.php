<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=['libelle','dateenvoi', 'envoireussi', 'typemessages_id', 'modeles_id', 'users_id', 'contacts_id'];
    protected $table='messages';

    public function modele()
    {
    	return $this->hasMany('App\Modele');
    }
}
