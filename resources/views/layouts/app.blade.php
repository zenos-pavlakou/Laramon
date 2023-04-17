<!DOCTYPE html>
<!-- use https://vuejsexamples.com/a-vue-js-datatable-component-for-laravel-that-works-with-bootstrap/ for analytics -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/c6cabb5b4a.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="/js/index.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&family=Karantina:wght@300;400;700&family=Lato:wght@100;300;400;700;900&family=Raleway:wght@500;700;800;900&display=swap" rel="stylesheet">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @if(isset($pageTitle))
            <title>{{$pageTitle}}</title> 
        @else
            <title>Untitled Page</title>
        @endif


        <script rel="preload"  src="{{ mix('/js/app.js') }}" async defer></script>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet preload" defer>
        <!-- <link rel="stylesheet" href="/css/fontawesome.min.css"> -->

    </head>

    <body>
        <div id="app" class="app">
            
            @include('includes.nav')
            <main>
                @yield('content')
            </main>
        </div>

        <script>
            const toggleButton = document.querySelector('.toggle-about-me');
            const aboutMeCol = document.querySelector('.about-me-col');

            toggleButton.addEventListener('click', () => {
              aboutMeCol.classList.toggle('active');
              alert("foo");
            });

        </script>
    </body>
</html>