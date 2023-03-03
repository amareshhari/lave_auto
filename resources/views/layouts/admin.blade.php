<!DOCTYPE html>
<html>
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>Egmore Connect</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme" />
    <meta name="description" content="AdminK - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    @include('layouts.include.admin_head')
</head>
<body class="tables-datatables">
    <div id="main">
        @include('layouts.include.admin_header')
        @include('layouts.include.admin_sidebar')
        @yield('content')
    </div>
    @include('layouts.include.admin_script')
    @stack('custom-script')
</body>
</html>