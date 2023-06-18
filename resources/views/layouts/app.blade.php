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
    <body class="bg-gray-900 text-gray-200 ">
      <header class="p-5 border-b bg-slate-900 border-slate-700">
        <div class="container mx-auto flex justify-between items-center">
          <h1 class="font-semibold text-xl md:text-2xl">InstaDevs</h1>
          <nav class="text-md font-semibold space-x-2">
            <a href="#">Login</a>
            <a href="#">Sign Up</a>
          </nav>
        </div>
      </header>
      <main class="container mx-auto my-10 px-5 min-h-[calc(100vh-220px)]">
        <h2 class="font-semibold text-2xl md:text-3xl mb-5">
          @yield('title')
        </h2>
        @yield('content')
      </main>
      <footer class="uppercase border-t border-slate-700">
        <div class="container mx-auto text-center py-5">

          <p>InstaDev - All Rights Reserved - {{now()->year}}</p>
        </div>

      </footer>
    </body>
</html>
