<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Group;
use App\ContactGroup;
use App\Message;

class MessageController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(){
		$groups = Group::all();
    	return view('message.create', compact('groups'));
    }
	
	public function store(Request $request){
		echo "bonjour";
		Message::create([
             'libelle' =>$request->libelle,
            'contacts_id' =>$request->contacts_id,
            
        ]);

        return view('message.create')->with('success','Le contact a été ajouté au groupe sélectionné.');
    }
	
	public function sendgroupsms(Request $groupsdest){
		
		$groupdest_table = explode("_", $groupsdest);
		//$destinataires = 
	}
}
