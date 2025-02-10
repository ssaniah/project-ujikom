<?php

namespace Database\Seeders; 
 // Mendeklarasikan namespace untuk seeder, yang berfungsi untuk mengatur database seeding
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
 // Baris ini dikomentari, ini digunakan untuk menghindari event saat seeding (tidak digunakan dalam kode ini)
use Illuminate\Database\Seeder;  // Mengimpor kelas Seeder yang memungkinkan untuk membuat dan menjalankan seeder

class DatabaseSeeder extends Seeder  // Mendefinisikan kelas DatabaseSeeder yang mengelola proses seeding database
{
    /**
     * Seed the application's database.
     * Fungsi ini akan dijalankan untuk memulai proses seeding seluruh database
     */
    public function run(): void
    {
        // Memanggil seeder TaskListSeeder untuk mengisi tabel 'task_lists' dengan data task list
        $this->call(TaskListSeeder::class);

        // Memanggil seeder TaskSeeder untuk mengisi tabel 'tasks' dengan data tugas
        $this->call(TaskSeeder::class);
    }
}
