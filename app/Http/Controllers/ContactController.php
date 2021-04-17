<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Group;
use App\ContactGroup;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

        $contact= Contact::all();
        $contact= Contact::paginate(2);
        return view('contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
			'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
			'fonction'=>'required|max:255',
			'email' => 'required|max:255|email|unique:contacts,email,',
			'tel' => 'required|min:8|max:15|unique:contacts,tel,',
		]);

       Contact::create([
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'email' =>$request->email,
            'fonction' =>$request->fonction,
            'tel' =>$request->tel,
        ]);

        return redirect()->route('contact.index')->with('success','Le contact a été créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact= Contact::find($id);
		
        return view('contact.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $contact = Contact::find($id);
        return view('contact.edit', compact('contact'));    
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
			'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
			'fonction'=>'required|max:255',
			'email' => 'required|max:255|email|unique:contacts,email,'.$id,
			'tel' => 'required|min:8|max:15|unique:contacts,tel,'.$id,
		]);
		
        Contact::find($id)->update([
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'email' =>$request->email,
            'fonction' =>$request->fonction,
            'tel' =>$request->tel,
            
        ]);
        return redirect()->route('contact.index')->with('success','Le contact a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact.index')->with('success','Le contact a été supprimé avec succès');
    }

     public function searching()
    {
        $q=request()->input('q');
        $contact=Contact::where('nom', 'LIKE', "%$q%")
                    ->orwhere('prenom', 'LIKE', "%$q%")
                    ->orwhere('email', 'LIKE', "%$q%")
                    ->orwhere('fonction', 'LIKE', "%$q%")
                    ->orwhere('tel', 'LIKE', "%$q%")
                    ->get();

        return view('contact.search',compact('contact'));
    }
	
	public function addgroup($id){
	//$groups_all= Group::all();
		$contact = Contact::find($id);
		
		$groups = DB::table('groups')->whereNotIn('id', DB::table('contacts_groups')->select('groups_id')->where('contacts_id', '=', $id))->get();
		
        return view('contact.addgroup',compact('contact', 'groups'));
	}
	
	public function addtogroup(Request $request){
		$request->validate([
			'priority' => 'required|min:0|max:15',
		]);

        ContactGroup::create([
		    'contacts_id' =>$request->contacts_id,
            'groups_id' =>$request->groups_id,
            'priority' =>$request->priority,
        ]);

        return redirect()->route('contact.show', $request->contacts_id)->with('success','Le contact a été ajouté au groupe sélectionné.');
	}
	
	public function removefromgroup($id)
    {
		
		$id_table = explode("_", $id);
		//echo $id_table[0];
		
		ContactGroup::find($id_table[0])->delete();
		
        return redirect()->route('contact.show', $id_table[1])->with('success','Le contact a été rétiré du groupe avec succès');
    }
}
