<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Menampilkan halaman utama dengan daftar task dan task list
    public function index(Request $request)
    {
        $search = $request->input('search'); // Ambil input pencarian
        
        // Filter list dan task berdasarkan input pencarian
        $lists = TaskList::when($search, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->get();

        $tasks = Task::when($search, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
        })->orderBy('created_at', 'desc')->get();

        $data = [
            'title' => 'Home',
            'lists' => $lists,
            'tasks' => $tasks,
            'priorities' => Task::PRIORITIES
        ];

        return view('pages.home', $data);
    }

    // Menambahkan task baru dengan validasi nama dan list_id
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'list_id' => 'required|exists:task_lists,id' // Pastikan list_id sesuai dengan ID yang ada
        ]);

        Task::create([
            'name' => $request->name,
            'list_id' => $request->list_id
        ]);

        return redirect()->back()->with('success', 'Task successfully added!');
    }

    // Menandai task sebagai selesai
    public function complete($id)
    {
        $task = Task::findOrFail($id);
        $task->update([
            'is_completed' => true
        ]);

        return redirect()->back()->with('success', 'Task marked as completed.');
    }

    // Menghapus task berdasarkan ID
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->back()->with('success', 'Task successfully deleted.');
    }
    public function show($id) {
        $task = Task::findOrFail($id);

        $data =[
            'title'=> 'detail',
            'task'=>$task,
        ];

        return view('pages.details',$data);
    }

}