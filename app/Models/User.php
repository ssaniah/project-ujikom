<?php

namespace App\Models; // Menyatakan namespace untuk model ini

// Mengimpor kelas yang dibutuhkan
use Illuminate\Database\Eloquent\Factories\HasFactory; // Menggunakan trait HasFactory untuk menghasilkan factory model
use Illuminate\Foundation\Auth\User as Authenticatable; // Mengimpor User sebagai kelas yang mewarisi Authenticatable untuk otentikasi pengguna
use Illuminate\Notifications\Notifiable; // Menggunakan trait Notifiable untuk notifikasi pengguna

class User extends Authenticatable
{
    // Menggunakan trait HasFactory dan Notifiable
    // HasFactory memungkinkan penggunaan factory untuk pembuatan data uji
    // Notifiable memungkinkan pengguna menerima notifikasi
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    // Atribut yang dapat diisi dengan mass assignment
    protected $fillable = [
        'name', // Nama pengguna
        'email', // Email pengguna
        'password', // Password pengguna
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    // Atribut yang akan disembunyikan saat di-serialize (misalnya saat mengembalikan data pengguna sebagai JSON)
    protected $hidden = [
        'password', // Menyembunyikan password agar tidak dikirim dalam respons
        'remember_token', // Menyembunyikan token ingat untuk otentikasi pengguna
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    // Mendefinisikan bagaimana atribut tertentu harus di-cast
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime', // Mengubah atribut email_verified_at menjadi objek datetime
            'password' => 'hashed', // Menghitung atribut password sebagai nilai hash, meskipun ini dilakukan otomatis oleh Laravel
        ];
    }
}
