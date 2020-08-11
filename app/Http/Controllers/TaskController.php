<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();
        return view('task', ['task' => $task]);
    }

    public function store()
    {
        $item = new Task();
        $item->description = Request('description');
        $item->save();
        return redirect('/');
    }
    public function update($id)
    {
        $item = Task::find($id);
        $item->checked = Request('checked');
        $item->save();
        return redirect('/');
    }
    public function destroy($id)
    {
        $item = Task::find($id);
        $item->delete();
        return redirect('/');
    }
}