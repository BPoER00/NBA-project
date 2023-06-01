<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('titulo') </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <script src="https://kit.fontawesome.com/b0a759e689.js" crossorigin="anonymous"></script>
        @yield('styles')
    </head>
    <body class="hold-transition sidebar-mini">
            
            @include('layouts.header')

            @include('layouts.sidebar')

            <main class="py-4" style="background: #FFFFFF;">
                @yield('content')
            </main>

            @include('layouts.footer')

            @stack('javascript_extra')
        </body>
</html>