<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Models\Sector;
use App\Models\User;

class TaskController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $tasks = Task::where('u_id',$id)
        ->Join('sectors','tasks.s_id', '=', 'sectors.id')
        ->select('tasks.id as id','sectors.name as sector','tasks.title as title','tasks.content as content')
        ->get();

        return $tasks;
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function store(Request $request)
    {
        return Task::create($request->all());
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return $task;
    }
}
