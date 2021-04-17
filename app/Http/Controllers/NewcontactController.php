<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewcontactController extends Controller
{
     public function formulaire(){
    	return view('newcontact');
    }
}
