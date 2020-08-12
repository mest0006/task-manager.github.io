<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Task;
use App\Group;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $group = Group::all();        
        // $groupId =  Group::user()->id;
        // $userGroup = Group::where('user_id', $userId )->get();
        $task = Task::all();
        return view('task', ['tasks' => $task]);
    }

    public function store()
    {
        $task = new Task();
        $task->description = request('description');
        $task->save();

        return redirect('/task');
    }

    public function update($id)
    {
        $task = Task::find($id);
        $task->completed = request('completed');
        $task->save();

        return redirect('/task');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/task');
    }
}
