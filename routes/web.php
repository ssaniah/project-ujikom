<?php

use App\Http\Controllers\TaskController; // Mengimpor TaskController untuk mengelola task-related routes
use App\Http\Controllers\TaskListController; // Mengimpor TaskListController untuk mengelola task list-related routes
use Illuminate\Support\Facades\Route; // Mengimpor facade Route untuk mendefinisikan dan mengelola routes

// Membuat route untuk home
Route::get('/', [TaskController::class, 'index'])->name('home'); // Menetapkan route untuk halaman utama dengan memanggil metode 'index' dari TaskController

// Menetapkan resource route untuk TaskList
Route::resource('lists', TaskListController::class); // Membuat route CRUD untuk TaskList dengan menggunakan resource controller

// Menetapkan resource route untuk Task
Route::resource('tasks', TaskController::class); // Membuat route CRUD untuk Task dengan menggunakan resource controller

// Menetapkan route untuk menandai task sebagai selesai
Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete'); // Menetapkan route untuk menyelesaikan task, yang memanggil metode 'complete' dari TaskController

Route::patch('/tasks/{task}/change-list', [TaskController::class, 'changeList']) 
// Route PATCH untuk mengubah daftar tugas dengan parameter {task}, yang mengarah ke method changeList di TaskController
    ->name('tasks.changeList'); // Menamai route sebagai 'tasks.changeList' untuk referensi di aplikasi
