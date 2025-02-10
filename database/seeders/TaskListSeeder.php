<?php

namespace Database\Seeders; 
 // Mendeklarasikan namespace untuk TaskListSeeder, yang berfungsi untuk menambah data ke dalam tabel database
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
 // Mengimpor kelas untuk menghindari event saat seeding (tidak digunakan dalam kode ini)
use Illuminate\Database\Seeder;  // Mengimpor kelas Seeder untuk membuat dan menjalankan seeder
use App\Models\TaskList;  // Mengimpor model TaskList untuk berinteraksi dengan tabel 'task_lists' di database

class TaskListSeeder extends Seeder  // Mendefinisikan kelas TaskListSeeder yang bertugas mengisi tabel 'task_lists' dengan data
{
    /**
     * Run the database seeds.
     * Fungsi ini akan dijalankan untuk mengisi tabel 'task_lists' dengan data
     */
    public function run(): void
    {
        // Menyusun array yang berisi daftar task list yang akan dimasukkan ke dalam tabel 'task_lists'
        $lists = [
            [
                'name' => 'Liburan',  // Nama task list pertama
            ],
            [
                'name' => 'Belajar',  // Nama task list kedua
            ],
            [
                'name' => 'Tugas',  // Nama task list ketiga
            ]
        ];

        // Menyisipkan semua data dalam array $lists ke dalam tabel 'task_lists' di database
        TaskList::insert($lists);
    }
}
