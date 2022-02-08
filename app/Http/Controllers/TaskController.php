<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Models\Sector;
use App\Models\User;
use App\Models\session;

class TaskController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $tasks = Task::where('u_id', $id)
            ->orderBy('id', 'asc')
            ->Join('sectors', 'tasks.s_id', '=', 'sectors.id')
            ->select('tasks.id as id', 'sectors.name as sector', 'tasks.title as title', 'tasks.content as content')
            ->get();

        return $tasks;
    }

    public function show(Task $task)
    {
        switch ($task["s_id"]) {
            case 1:
                $task["s_id"] = "「重要」で「緊急」なもの";
                break;
            case 2:
                $task["s_id"] = "「重要」だけど「緊急」でないもの";
                break;
            case 3:
                $task["s_id"] = "「重要」ではないが「緊急」なもの";
                break;
            case 4:
                $task["s_id"] = "「重要」でもないが「緊急」でもないもの";
                break;
            default:
                $task["s_id"] = "その他";
        }

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
