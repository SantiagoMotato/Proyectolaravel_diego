@extends('layouts.app')

@section('titulo')
    Inicio de sesion en Pagani Automobili
@endsection

@section('contenido')
<div class="md:flex md:justify-center">
    <div class="md:w-6/12 p-5 flex justify-center items-center">
        <img src="{{ asset('img/paganiLogo.jpg') }}" alt="Imagen de registro" class="w-300 rounded-2xl">
    </div>
    <div class="md:w-4/12 bg-slate-300 p-6 rounded-lg shadow-xl">
        <form method="post" action="{{ route('login') }}" novalidate>
            @csrf

            @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
            @endif
            
            <div class="mb-5">
                <input type="checkbox" name="remember"> <label class="text-gray-500 text-sm" for="">Mantener mi sesion abierta</label>
            </div>



            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase font-bold">E-Email</label>
                <input type="text" id="email" name="email" placeholder="E-Email..." class="border p-3 w-full rounded-lg">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase font-bold">Paswword</label>
                <input type="text" id="password" name="password" placeholder="Paswword..." class="border p-3 w-full rounded-lg">
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">{{$message}}</p>
                @enderror
            </div>
            <input type="submit" value="Iniciar sesion" class="bg-red-500 hover:bg-red-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>
@endsection