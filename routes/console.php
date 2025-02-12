<?php

use Illuminate\Foundation\Inspiring; // Mengimpor kelas Inspiring untuk mendapatkan kutipan inspiratif
use Illuminate\Support\Facades\Artisan; // Mengimpor facade Artisan untuk membuat dan menjalankan perintah Artisan

// Mendefinisikan perintah Artisan baru
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote()); // Menampilkan kutipan inspiratif dengan menggunakan method 'quote' dari kelas Inspiring
})->purpose('Display an inspiring quote') // Menetapkan tujuan atau deskripsi perintah Artisan ini
  ->hourly(); // Menjadwalkan perintah ini untuk dijalankan setiap jam
