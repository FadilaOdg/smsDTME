<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        //'name', 'email', 'password',
        'nom', 'prenom', 'email', 'fonction', 'tel',
    ];
    protected $table='contacts';
	
	public function contactgroups()
	{
		return $this->belongsToMany('App\Group', 'contacts_groups', 'contacts_id', 'groups_id')->withPivot('id', 'priority');
	}

	public function contact_groups()
	{
		return $this->belongsToMany('App\ContactGroup', 'id', 'contacts_id');
	}
	
}
