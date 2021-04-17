<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsmsController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function formulaire(){
    	return view('newsms');
    }
}
