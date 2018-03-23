<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Enterprise Resource Planning, Material Requirement Planning, PT. PAMINDO 3T">
    <meta name="keywords" content="ERP, Enterprise Resource Planning, MRP, Material Requirement Planning">
    <meta name="author" content="PT. PAMINDO 3 T">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'ERP') }}</title>
    
    @include('layouts.admin.styles')

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="@yield('body-class')">
    @yield('wrapper')
    @include('layouts.admin.scripts')
</body>
</html>
