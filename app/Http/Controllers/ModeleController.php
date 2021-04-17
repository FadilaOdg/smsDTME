<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modele;
use App\Typemessage;

class ModeleController extends Controller
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
        $modele = Modele::all();
        return view('modele.index',compact('modele'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $typemessage= Typemessage::all();
        return view('modele.create',compact('typemessage'));
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
            'libelle' => 'required|max:255|unique:modeles',
            'typemessages_codem' => 'required|max:255',
        ]);

        Modele::create([
            'libelle' =>$request->libelle,
            'typemessages_codem'=>$request->typemessages_codem,
        ]);

        return redirect()->route('modele.index')->with('success','Votre enrégistrement a été effectué!');
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
        $modele = Modele::find($id);
        $typemessage= Typemessage::all();
        return view('modele.edit', compact('modele','typemessage'));
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
            'libelle' => 'required|max:255|unique:modeles',
            'typemessages_codem' => 'required|max:255',
        ]);
        
         Modele::find($id)->update([
            'libelle' =>$request->libelle,
            'typemessages_codem'=>$request->typemessages_codem,
        ]);
        return redirect()->route('modele.index')->with('success','Vos modifications ont été enrégistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Modele::find($id)->delete();
        return redirect()->route('modele.index')->with('success','Le modèle de message a été supprimé avec succès');
    }

    public function recherchee()
    {
        $q=request()->input('q');
        $modele=Modele::where('libelle', 'LIKE', "%$q%")
                    ->orwhere('typemessages_codem', 'LIKE', "%$q%")
                    ->get();

        return view('modele.search',compact('modele'));
    }
}
