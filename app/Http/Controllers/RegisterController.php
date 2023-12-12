<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }
    public function store(Request $request) {

        //modificar el request - Con esto aseguramos que el username no tenga espacios y además que no se repita en la bd
        $request->request->add(['username'=>Str::slug($request->username)]);

        $this->validate($request, [
            'name'=>'required|max:30',
            'username'=>'required|unique:users|min:3|max:30',
            'email'=>'required|unique:users|email|max:60',
            'password'=>'required'
        ]);

        //n método estatico que se llama create y es el equivalente a INSERT INTO pero usando un modelo en laravel:
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ]);
        

        //AUTHENTICATION
       /*  auth()->attempt([
            'email'=> $request->email,
            'password'=> $request->password
        ]); */

        //OTRA FORMA DE AUTENTICAR
        auth()->attempt($request->only('email','password'));
        

        /* dd('Creando Usuario'); */
        //REDIRECTION
        return redirect()->route('post.index');
    }


}
