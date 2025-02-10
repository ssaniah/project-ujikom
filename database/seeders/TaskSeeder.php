<?php

namespace Database\Seeders;  // Menentukan namespace untuk seeder, yang berfungsi untuk memasukkan data ke dalam database
use App\Models\Task;  // Mengimpor model Task untuk berinteraksi dengan tabel 'tasks' di database
use App\Models\TaskList;  // Mengimpor model TaskList untuk berinteraksi dengan tabel 'task_lists' di database
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
  // Mengimpor kelas untuk menghindari event saat seeding (tidak digunakan dalam kode ini)
use Illuminate\Database\Seeder;  // Mengimpor kelas Seeder untuk membuat dan menjalankan seeder

class TaskSeeder extends Seeder  // Mendefinisikan kelas TaskSeeder yang akan mengisi tabel tasks dengan data
{
    /**
     * Run the database seeds.
     * Fungsi ini akan dieksekusi saat menjalankan seeder untuk mengisi data ke dalam database
     */
    public function run(): void
    {
        // Menyusun array berisi data tugas yang akan dimasukkan ke dalam tabel 'tasks'
        $tasks = [
            [
                'name' => 'Belajar Laravel',  // Nama tugas
                'description' => 'Belajar Laravel di santri koding',  // Deskripsi tugas
                'is_completed' => false,  // Menandakan bahwa tugas ini belum selesai
                'priority' => 'medium',  // Menetapkan prioritas tugas sebagai medium
                // Menyusun ID list berdasarkan nama 'Belajar' dalam tabel TaskList
                'list_id' => TaskList::where('name', 'Belajar')->first()->id,
            ],
            [
                'name' => 'Belajar React',  // Nama tugas
                'description' => 'Belajar React di WPU',  // Deskripsi tugas
                'is_completed' => true,  // Menandakan bahwa tugas ini sudah selesai
                'priority' => 'high',  // Menetapkan prioritas tugas sebagai high
                // Menyusun ID list berdasarkan nama 'Belajar' dalam tabel TaskList
                'list_id' => TaskList::where('name', 'Belajar')->first()->id,
            ],
            [
                'name' => 'Pantai',  // Nama tugas
                'description' => 'Liburan ke Pantai bersama keluarga',  // Deskripsi tugas
                'is_completed' => false,  // Menandakan bahwa tugas ini belum selesai
                'priority' => 'low',  // Menetapkan prioritas tugas sebagai low
                // Menyusun ID list berdasarkan nama 'Liburan' dalam tabel TaskList
                'list_id' => TaskList::where('name', 'Liburan')->first()->id,
            ],
            [
                'name' => 'Villa',  // Nama tugas
                'description' => 'Liburan ke Villa bersama teman sekolah',  // Deskripsi tugas
                'is_completed' => true,  // Menandakan bahwa tugas ini sudah selesai
                'priority' => 'medium',  // Menetapkan prioritas tugas sebagai medium
                // Menyusun ID list berdasarkan nama 'Liburan' dalam tabel TaskList
                'list_id' => TaskList::where('name', 'Liburan')->first()->id,
            ],
            [
                'name' => 'Matematika',  // Nama tugas
                'description' => 'Tugas Matematika bu Nina',  // Deskripsi tugas
                'is_completed' => true,  // Menandakan bahwa tugas ini sudah selesai
                'priority' => 'medium',  // Menetapkan prioritas tugas sebagai medium
                // Menyusun ID list berdasarkan nama 'Tugas' dalam tabel TaskList
                'list_id' => TaskList::where('name', 'Tugas')->first()->id,
            ],
            [
                'name' => 'PAIBP',  // Nama tugas
                'description' => 'Tugas presentasi pa budi',  // Deskripsi tugas
                'is_completed' => false,  // Menandakan bahwa tugas ini belum selesai
                'priority' => 'high',  // Menetapkan prioritas tugas sebagai high
                // Menyusun ID list berdasarkan nama 'Tugas' dalam tabel TaskList
                'list_id' => TaskList::where('name', 'Tugas')->first()->id,
            ],
            [
                'name' => 'Project Ujikom',  // Nama tugas
                'description' => 'Membuat project Todo App untuk ujikom',  // Deskripsi tugas
                'is_completed' => false,  // Menandakan bahwa tugas ini belum selesai
                'priority' => 'high',  // Menetapkan prioritas tugas sebagai high
                // Menyusun ID list berdasarkan nama 'Tugas' dalam tabel TaskList
                'list_id' => TaskList::where('name', 'Tugas')->first()->id,
            ],
        ];

        // Melakukan insert data ke dalam tabel 'tasks' di database
        Task::insert($tasks);
    }
}
