<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Http\Controllers\Controller;
//use App\Http\Request;

use App\User;

use App\Http\Requests\UserRequest;


class UsersController extends Controller
{
    //
    public function index(){
     
    $users = User::orderBy('id','ASC')->paginate(5); //trae todos los usuarios ordenados por id

     return view('admin.users.index')->with('users',$users);  //con with le para la vble $users a la vista, y la llamo users

    }
    

    public function create(){
      
      return view('admin.users.create');

    }

    public function store(UserRequest $request){

       $user=new User($request->all()); //valores que recibimos
       $user->fill($request->all());

       $user->save();
      
      flash("Se ha registrado " .$user->name. " de foma exitosa",'success')->important(); //para mensajes de alerta
 
      
        return redirect()->route('users.index');

    }
    
    public function show($id){


    }
    
    public function edit($id){

     $user = User::find($id);
     return view('admin.users.edit')->with('user',$user);


    }

    public function update(Request $request, $id){

     $user = User:: find($id);
     $user->name=$request->name;
     $user->email=$request->email;
     $user->type=$request->type;
     $user->save();

     flash('El usuario ' . $user->name . ' ha sido editado')->warning()->important();

     return redirect()->route('users.index');
    }
 

    public function destroy($id){
       
       $user=User::find($id);
       $user->delete();

       flash("El usuario ".$user->name . " a sido eliminado de forma exitosa")->error()->important();

       return redirect()->route('users.index');
    }

}