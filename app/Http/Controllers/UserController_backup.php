<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

use App\Typeuser;

class UserController extends Controller
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
        $user = User::all();
        return view('user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $typeuser= Typeuser::all();
        return view('user.create',compact('typeuser'));
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
		    'name' => 'required|max:255',
            'prenom' => 'required|max:255',
            'fonction' => 'required|max:255',
            'departement' => 'required|max:255',
            'service' => 'required|max:255',
            'division' => 'required|max:255',
			'telephone' => 'required|min:8|max:15|unique:users,telephone,',
			'email' => 'required|max:255|email|unique:users,email,',
			'password' => 'required|max:255',
            'typeusers_code' => 'required|max:255',
		]);
        
        User::create([
            'name' =>$request->name,
            'prenom' =>$request->prenom,
            'fonction' =>$request->fonction,
            'departement' =>$request->departement,
            'service' =>$request->service,
            'division' =>$request->division,
            'telephone' =>$request->telephone,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'typeusers_code'=>$request->typeusers_code,
        ]);

        return redirect()->route('user.index')->with('success','Votre enrégistrement a été effectué!');
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
         
        $user = User::find($id,['id', 'name','prenom','fonction','departement','service','division','typeusers_code']);
        $typeuser= Typeuser::all();
        return view('user.edit', compact('user','typeuser'));
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
            'name' => 'required|max:255',
            'prenom' => 'required|max:255',
            'fonction' => 'required|max:255',
            'departement' => 'required|max:255',
            'service' => 'required|max:255',
            'division' => 'required|max:255',
            'typeusers_code' => 'required|max:255',
        ]);
        
        User::find($id)->update([
            'name' =>$request->name,
            'prenom' =>$request->prenom,
            'fonction' =>$request->fonction,
            'departement' =>$request->departement,
            'service' =>$request->service,
            'division' =>$request->division,
            //'telephone' =>$request->telephone,
            //'email' =>$request->email,
            //'password' =>Hash::make($request->password),
            'typeusers_code'=>$request->typeusers_code,
        ]);
        return redirect()->route('user.index')->with('success','Vos modifications ont été enrégistrées!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')->with('success','L\'utilisateur a été supprimé avec succès!');
    }

    public function search()
    {
        $q=request()->input('q');
        $user=User::where('name', 'LIKE', "%$q%")
                    ->orwhere('prenom', 'LIKE', "%$q%")
                    ->orwhere('fonction', 'LIKE', "%$q%")
                    ->orwhere('departement', 'LIKE', "%$q%")
                    ->orwhere('service', 'LIKE', "%$q%")
                    ->orwhere('division', 'LIKE', "%$q%")
                    ->orwhere('telephone', 'LIKE', "%$q%")
                    ->get();

        return view('user.search',compact('user'));
    }
}
