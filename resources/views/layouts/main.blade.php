<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dc-comics | @yield('route')</title>
    {{-- style --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}"type="text/css">
</head>
<body>
    @include('includes.header')
    @include('includes.jumbotron')
    <main>
        @yield('main-content')
        @yield('main-banner')
    </main>
    @include('includes.footer')
</body>
    
</html>