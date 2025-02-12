<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> <!-- Mendefinisikan charset sebagai UTF-8 untuk mendukung berbagai karakter internasional -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Menyusun halaman agar responsif pada perangkat dengan ukuran layar berbeda -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Menyatakan kompatibilitas untuk Internet Explorer -->

    <title>{{ $title }} - {{ config('app.name') }}</title> <!-- Menampilkan judul halaman dengan variabel dynamic ($title) dan nama aplikasi dari konfigurasi -->

    <!-- Import Bootstrap CSS Online -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"> <!-- Menambahkan file CSS Bootstrap untuk styling -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/font/bootstrap-icons.css') }}"> <!-- Menambahkan file CSS untuk ikon Bootstrap -->
</head>

<body>
    @include('partials.navbar') <!-- Mengambil dan menyertakan bagian navbar dari file 'partials.navbar' -->

    @yield('content') <!-- Menyertakan konten yang akan didefinisikan di setiap halaman yang menggunakan layout ini -->

    @include('partials.modal') <!-- Mengambil dan menyertakan bagian modal dari file 'partials.modal' -->

    <script src="{{ asset('js/script.js') }}"></script> <!-- Menyertakan file JavaScript khusus untuk interaksi di halaman -->
    
    <!-- Import Bootstrap JS Online -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script> <!-- Menambahkan file JavaScript Bootstrap untuk fitur-fitur interaktif seperti modal, dropdown, dll. -->
</body>

</html>
