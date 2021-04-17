<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactGroup extends Model
{
   protected $table='contacts_groups';
   protected $fillable=['contacts_id', 'groups_id', 'priority'];


  public function contact()
  {
        return $this->belongsTo('App\Contact','contacts_id','id');
  }
  public function group()
  {
        return $this->belongsTo('App\Group','groups_id','id');
  }

}
