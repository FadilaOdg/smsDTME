<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Contact;
use App\ContactGroup;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
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
        $groupe= Group::all();
            return view('group.index',compact('groupe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $contacts= Contact::all();
        return view('group.create',compact('contacts'));
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
			'libelle' => 'required|max:255|unique:groups,libelle,',
			'description' => 'max:255',
		]);

         Group::create([
            'libelle' =>$request->libelle,
            'description' =>$request->description,
            
        ]);

        return redirect()->route('group.index')->with('success','Le groupe de contact a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $groupe= Group::find($id);
        return view('group.show',compact('groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupe= Group::find($id);
        return view('group.edit',compact('groupe'));
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
			'libelle' => 'required|max:255|unique:groups,libelle,'.$id,
			'description' => 'max:255',
		]);
     
         Group::find($id)->update([
            'libelle' =>$request->libelle,
            'description' =>$request->description,
            
        ]);
        return redirect()->route('group.index')->with('success','Le groupe de contact a été modifié avec succès'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::find($id)->delete();
        return redirect()->route('group.index')->with('success','Le groupe de contact a été supprimé avec succès');
    }

     public function recherch()
    {
        $q=request()->input('q');
        $groupe=Group::where('libelle', 'LIKE', "%$q%")
                    ->orwhere('description', 'LIKE', "%$q%")
                    ->get();

        return view('group.search',compact('groupe'));
    }

    public function addcontact($id)
    {
        $groupe = Group::find($id);
        
        $contact = DB::table('contacts')->whereNotIn('id', DB::table('contacts_groups')->select('contacts_id')->where('groups_id', '=', $id))->get();
        
        return view('group.addcontact',compact('contact', 'groupe'));
    }

    public function addtocontact(Request $request){
        $request->validate([
            'priority' => 'required|min:0|max:15',
        ]);

        ContactGroup::create([
             'groups_id' =>$request->groups_id,
            'contacts_id' =>$request->contacts_id,
            'priority' =>$request->priority,
        ]);

        return redirect()->route('group.show', $request->groups_id)->with('success','Le contact a été ajouté au groupe sélectionné.');
    }
	
	public function removefromgroup($id)
    {
		
		$id_table = explode("_", $id);
		//echo $id_table[0];
		
		ContactGroup::find($id_table[0])->delete();
		
        return redirect()->route('group.show', $id_table[1])->with('success','Le contact a été rétiré du groupe avec succès');
    }
}