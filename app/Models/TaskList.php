<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    // Menentukan atribut yang dapat diisi secara mass-assignment
    protected $fillable = ['name'];

    // Menentukan atribut yang tidak boleh diisi secara mass-assignment
    protected $guarded = [
        'id',           // ID otomatis dikelola oleh sistem
        'created_at',   // Timestamp created_at otomatis dikelola oleh sistem
        'updated_at'    // Timestamp updated_at otomatis dikelola oleh sistem
    ];

    // Relasi one-to-many dengan model Task
    public function tasks() {
        // Setiap list memiliki banyak tugas (tasks)
        return $this->hasMany(Task::class, 'list_id');
    }
}
