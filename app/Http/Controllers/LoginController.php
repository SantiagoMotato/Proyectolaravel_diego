<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    
    public function store(Request $request){
        /* dd($request->remember); */
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email','password'),$request->remember)){
            return back()->with('mensaje','¡Credenciales incorrectas!');
        }
            return redirect()->route('post.index', auth()->user()->username);
    } 

    /* public function store(){
        auth()->logout();
        return redirect()->route('login');
    } */

}
