<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Group;
use App\ContactGroup;
//use Illuminate\Support\Facades\DB;

class ContactGroupController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /*ublic function index()
    {
        $contactgroup= ContactGroup::all();
            return view('contact.index',compact('contact'));
    }*/


    /*public function create()
    {
        
        return view('contactgroup.create');
    }*/

    /*public function store(Request $request)
    {
        $request->validate([
			'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
			'fonction'=>'required|max:255',
			'email' => 'required|max:255|email|unique:contacts,email,',
			'tel' => 'required|min:8|max:15|unique:contacts,tel,',
		]);

       ContactGroup::create([
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'email' =>$request->email,
            'fonction' =>$request->fonction,
            'tel' =>$request->tel,
        ]);

        return redirect()->route('contactgroup.index')->with('success','Contact added to group');
    }*/

    
    public function show($id)
    {
        //$contactgroup = ContactGroup::find($id);
		
        //return view('contact.show',compact('contactgroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //echo $id;
		$id_table = explode("_", $id);
		$contactgroup = ContactGroup::find($id_table[0]);
		$flag = $id_table[1];
        return view('contactgroup.edit', compact('contactgroup', 'flag'));    
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {	
		$request->validate([
			'priority' => 'required|min:0|max:15',
		]);
		
        ContactGroup::find($id)->update([
            'groups_id' =>$request->groups_id,
            'contacts_id' =>$request->contacts_id,
            'priority' =>$request->priority,
        ]);
		if($request->flag==1){
			return redirect()->route('contact.show', $request->contacts_id)->with('success','Le lien du contact a été modifié dans le groupe avec succès');
		}
		if($request->flag==0){
			return redirect()->route('group.show', $request->groups_id)->with('success','Le lien du contact a été modifié dans le groupe avec succès');
		}
    }

 
   /* public function destroy($id)
    {
		echo "BIENVENUE";
        /*ContactGroup::find($id)->delete();
		
		//IF request is from contact or group page
        return redirect()->route('contact.show',$request->contacts_id)->with('success','Le contact a été rétiré du groupe avec succès');
    }*/
}
