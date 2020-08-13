<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Group;
use Auth;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $group = Group::find($id);
        $task = Task::where('group_id', $id)->get();

        return view('/task', ['tasks' => $task, 'group' => $group]);
    }

    public function store()
    {

        $task = new Task();
        $task->description = request('description');
        $task->group_id = request('group_id');
        $task->save();

        return redirect('/task/' . request('group_id'));
    }

    public function update($id)
    {
        $task = Task::find($id);
        $task->completed = request('completed');

        $task->save();
        return redirect('/task/' . request('group_id'));
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/task/' . request('group_id'));
    }
}