<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }} - {{ config('app.name') }}</title>

    <!-- Import Bootstrap CSS Online -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/font/bootstrap-icons.css') }}">
</head>

<body>
    @include('partials.navbar') <!-- Mengambil component navbar -->
    
    @yield('content') <!-- Render content -->
    
    @include('partials.modal')
    
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Import Bootstrap JS Online -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>