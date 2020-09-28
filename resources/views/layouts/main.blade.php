<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fred Soloy</title>
        <!-- Styles -->
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        
        
    </head>
    <body class="antialiased font-sans bg-gray-300 text-white">
        <div class="container">
        @yield('content')
        </div>
    </body>
</html>