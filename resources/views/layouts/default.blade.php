<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>Egmore Connect</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="AdminK - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.include.head')
</head>
    <body class="utility-page sb-l-c sb-r-c">
        <!-- container-scroller -->
        <div id="main" class="animated-fadeIn">
            @yield('content')
        </div>
        <!-- container-scroller -->
         <!-- partial -->
        @include('layouts.include.script')
    </body>
</html>
