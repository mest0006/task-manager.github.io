<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Group;

class TaskController extends Controller
{

    public function index()
    {
        $group = Group::all();
        return view('/list', ['group' => $group]);
    }

    public function update($id)
    {
        Task::where('id', $id)->update(['completed' => request('completed')]);

        return redirect('/list' . request('list'));
    }


    public function store()
    {

        $task = new Task;

        $task->description = request('description');

        $task->group_id = request('group_id');

        $task->save();



        return redirect('/list/' . request('group_id'));
    }



    public function destroy($id)
    {

        Task::destroy($id);



        return redirect('/list/' . request('list'));
    }
}