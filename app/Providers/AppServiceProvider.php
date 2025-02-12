<?php

namespace App\Providers; // Menyatakan namespace untuk service provider ini

use Illuminate\Support\ServiceProvider; // Mengimpor kelas ServiceProvider untuk membuat dan mengelola service dalam aplikasi Laravel

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    // Fungsi ini digunakan untuk mendaftarkan layanan aplikasi.
    public function register(): void
    {
        // Di sini Anda bisa menambahkan kode untuk mendaftarkan layanan ke container.
        // Contoh: $this->app->bind('ServiceName', 'ServiceImplementation');
    }

    /**
     * Bootstrap any application services.
     */
    // Fungsi ini digunakan untuk melakukan bootstrap pada layanan aplikasi setelah mereka terdaftar.
    // Biasanya digunakan untuk mengonfigurasi, mendengarkan event, atau menghubungkan ke layanan lainnya.
    public function boot(): void
    {
        // Di sini Anda bisa menambahkan kode untuk menyiapkan aplikasi, seperti mengonfigurasi view composer atau registrasi event listener.
        // Contoh: View::composer('view.name', 'ClassName@method');
    }
}
