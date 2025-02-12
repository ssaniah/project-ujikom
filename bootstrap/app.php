<?php

use Illuminate\Foundation\Application; // Mengimpor kelas Application yang digunakan untuk mengonfigurasi dan menjalankan aplikasi Laravel
use Illuminate\Foundation\Configuration\Exceptions; // Mengimpor kelas Exceptions untuk menangani pengecualian terkait konfigurasi
use Illuminate\Foundation\Configuration\Middleware; // Mengimpor kelas Middleware yang digunakan untuk mendaftarkan middleware dalam aplikasi

return Application::configure(basePath: dirname(__DIR__)) // Mengonfigurasi aplikasi dengan menentukan path dasar (root) aplikasi.
    ->withRouting( // Menentukan routing aplikasi
        web: __DIR__.'/../routes/web.php', // File routing untuk web (akses aplikasi via browser)
        commands: __DIR__.'/../routes/console.php', // File routing untuk command-line (console commands)
        health: '/up', // Menentukan endpoint untuk memeriksa status aplikasi (misalnya untuk pengecekan kesehatan aplikasi)
    )
    ->withMiddleware(function (Middleware $middleware) { // Mendaftarkan middleware yang harus dijalankan untuk setiap permintaan
        // Middleware dapat ditambahkan atau dikonfigurasi di sini
    })
    ->withExceptions(function (Exceptions $exceptions) { // Menangani pengecualian atau kesalahan konfigurasi
        // Penanganan pengecualian dapat dilakukan di sini
    })
    ->create(); // Membuat dan mengembalikan aplikasi yang sudah dikonfigurasi
