<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devstagram - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
      
    </head>
    <body class="text-gray-200 bg-gray-900 ">
      <header class="p-5 border-b bg-slate-900 border-slate-700">
        <div class="container flex items-center justify-between mx-auto">
          <h1 class="text-xl font-semibold md:text-2xl">
            <a href="/">InstaDevs</a>
          </h1>
          <nav class="space-x-2 font-semibold text-md">
            <a href="/login">Login</a>
            <a href="{{route('register')}}">Sign Up</a>
          </nav>
        </div>
      </header>
      <main class="container mx-auto my-10 px-5 min-h-[calc(100vh-220px)]">
        <h2 class="mb-5 text-2xl font-semibold text-center md:text-3xl">
          @yield('title')
        </h2>
        @yield('content')
      </main>
      <footer class="uppercase border-t border-slate-700 bg-slate-900">
        <div class="container py-5 mx-auto text-center">

          <p class="font-medium">InstaDev - All Rights Reserved - {{now()->year}}</p>
        </div>

      </footer>
    </body>
</html>
