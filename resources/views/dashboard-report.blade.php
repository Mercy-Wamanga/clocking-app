<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>web-clocking-app</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css') }}">

        
    </head>
   <body>
       <div id="app">
     
       <header-nav-dash></header-nav-dash>
       <main-report></main-report>
   
       </div>

       <script src="{{ mix('/js/app.js') }}"></script>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

       <script src="{{URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
