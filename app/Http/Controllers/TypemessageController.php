<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typemessage;

class TypemessageController extends Controller
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
         $typem=Typemessage::all();
        return view('typemessage.index',compact('typem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('typemessage.create');
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
			'nom' => 'required|max:255|unique:typemessages,nom,',
			'codem' => 'required|min:0|unique:typemessages,codem,',
		]);
		

        Typemessage::create([
            'nom' =>$request->nom,
            'codem' =>$request->codem,
            
        ]);

        return redirect()->route('typemessage.index')->with('success','Le type de message a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $typem = Typemessage::find($id);
        return view('typemessage.edit', compact('typem'));
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
			'nom' => 'required|max:255|unique:typemessages,nom,'.$id,
			'codem' => 'required|min:0|unique:typemessages,codem,'.$id,
		]);
          
       Typemessage::find($id)->update([
            'nom' =>$request->nom,
            'codem' =>$request->codem,
            
        ]);
       
        return redirect()->route('typemessage.index')->with('success','Le type de message a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Typemessage::find($id)->delete();
        return redirect()->route('typemessage.index')->with('success','Le type de message a été supprimé avec succès');
    }

    public function rechercher()
    {
        $q=request()->input('q');
        $typem=Typemessage::where('nom', 'LIKE', "%$q%")
                    ->orwhere('codem', 'LIKE', "%$q%")
                    ->get();

        return view('typemessage.search',compact('typem'));
    }
}
