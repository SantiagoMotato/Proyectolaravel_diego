<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImagenController extends Controller
{
    public function store(Request $request){
        //dd('Hola desde imagenes controlador');
        /*  $input = $request->all();
        return response()->json($input); */

        $imagen = $request->file('file');

        $nombreImagen = Str::uuid().".".$imagen->extension();

        return response()->json(['imagen'=>$nombreImagen]);
    }
}
