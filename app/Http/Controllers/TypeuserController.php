<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typeuser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TypeuserController extends Controller
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
        $type=Typeuser::all();
        return view('typeuser.index',compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typeuser.create');
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
			'name' => 'required|max:255|unique:typeusers,name,',
			'code' => 'required|min:0|unique:typeusers,code,',
		]);

        if(Typeuser::create([
            'name' =>$request->name,
            'code' =>$request->code,
           ])){
				return redirect()->route('typeuser.index')->with('success','Le type d\'utilisateur a été ajouté avec succès');
		   }
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

         $type = Typeuser::find($id);
        return view('typeuser.edit', compact('type'));
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
			'name' => 'required|max:255|unique:typeusers,name,'.$id,
			'code' => 'required|min:0|unique:typeusers,code,'.$id,
		]);
		
        Typeuser::find($id)->update([
            'name' =>$request->name,
            'code' =>$request->code,
        ]);
        return redirect()->route('typeuser.index')->with('success','Le type d\'utilisateur a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Typeuser::find($id)->delete();
        return redirect()->route('typeuser.index')->with('success','Le type d\'utilisateur a été supprimé avec succès');
    }

    public function recherche()
    {
        $q=request()->input('q');
        $type=Typeuser::where('name', 'LIKE', "%$q%")
                    ->orwhere('code', 'LIKE', "%$q%")
                    ->get();

        return view('typeuser.search',compact('type'));
    }
}
