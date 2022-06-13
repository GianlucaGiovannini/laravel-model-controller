<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
       <header>
            <nav class="nav justify-content-center py-5">
              <a class="nav-link" href="#">Home</a>
              <a class="nav-link" href="#">Books</a>
            </nav>
       </header>
 
       <main>
            @yield('content')
        </main>

        <footer class="text-center py-3">
            &copy; by Boolean with &hearts; 
       </footer>

    </body>
</html>
