@extends('layouts.app')

@section('titulo')
    Hola desde Dashboard
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{asset('img/PaganiLogo.jpg')}}" alt="image de usuario">
            </div>

            <div class="md:w-6/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">
                {{-- {{dd($user)}}
                <p>{{ auth()->user()->username }}</p> --}}
                <p class="text-gray-700 text-2xl">{{ $user->username }}</p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal mt-10">Seguidores</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal mt-10">Siguiendo</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal mt-10">Posts</span>
                </p>
            </div>
        </div>
    </div>
@endsection