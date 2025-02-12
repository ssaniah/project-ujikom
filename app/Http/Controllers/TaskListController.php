<?php

namespace App\Http\Controllers; // Menyatakan namespace untuk controller ini

use App\Models\TaskList; // Mengimpor model TaskList untuk berinteraksi dengan tabel task_lists
use Illuminate\Http\Request; // Mengimpor kelas Request untuk menangani input HTTP

class TaskListController extends Controller
{
    // Menyimpan TaskList baru
    public function store(Request $request) {
        // Validasi input dari request
        $request->validate([
            'name' => 'required|max:100' // Nama list tugas wajib diisi dan maksimal 100 karakter
        ]);

        // Menambahkan TaskList baru ke dalam database
        TaskList::create([
            'name' => $request->name // Menyimpan nama yang diterima dari form
        ]);

        return redirect()->back(); // Mengarahkan kembali ke halaman sebelumnya setelah berhasil menyimpan
    }

    // Menghapus TaskList berdasarkan ID
    public function destroy($id) {
        // Mencari TaskList berdasarkan ID, dan jika ditemukan, hapus data tersebut
        TaskList::findOrFail($id)->delete();

        return redirect()->back(); // Mengarahkan kembali setelah berhasil menghapus TaskList
    }
}
