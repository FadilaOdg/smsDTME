<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable=['libelle','description'];

    public function groupcontacts()
	{
		return $this->belongsToMany('App\Contact', 'contacts_groups', 'groups_id', 'contacts_id')->withPivot('id', 'priority');
	}
}
