<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagani</title>
        @vite('resources/css/app.css')

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="bg-gray-100">

        <header class="p-5 border-b bg-white shadow">
            <h1 class="text-3xl font-black text-black">
                Pagani Automobili
            </h1>
            <a href="" class="font-bold mr-3">LOGIN</a>
            <a href="{{route('register')}}" class="font-bold">CREAR CUENTA</a>
        </header>
        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>
        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Pagani - Todos los derechos reservados {{date("Y")}}
        </footer>
    </body>
</html>
