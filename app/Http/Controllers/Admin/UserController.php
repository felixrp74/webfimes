<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // $users = User::all()->orderBy('id', 'DESC')->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {         

        $validador = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'escuela' => 'required',
            'password' => 'required',
        ]);
        
        if($validador->fails())
        {
            return response()->json(['status_code' => 400, 'message' => 'completa los campos']);
        }
 
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make( $request->password );
        $user->escuela = $request->escuela;
 
        $user->save();

        // return redirect()->route('admin.users.edit', $user)->with('info' , 'Creado exito');
        return $this->index();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $validador = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'escuela' => 'required',
            'password' => 'required',
        ]);
        
        if($validador->fails())
        {
            return response()->json(['status_code' => 400, 'message' => 'Mala peticion']);
        } 
         
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make( $request->password );
        $user->escuela = $request->escuela;
         
        $user->update(); 

        return redirect()->route('admin.users.edit', $user)->with('info' , 'Actualizado exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('info', 'Eliminado exito');
    }
}
