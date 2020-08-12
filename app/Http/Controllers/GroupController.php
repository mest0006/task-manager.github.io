<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use App\Group;
use App\Task;


class GroupController extends Controller
{

    public function index()
    {
        $group = Group::all();
        return view('home', ['group' => $group]);
    }



    public function store()
    {

        $group = new Group();

        $group->name = request('name');

        $group->color = request('color');

        $group->user_id = Auth::id();

        $group->save();



        return redirect('/');
    }



    public function edit($id)
    {


        $group = Group::find($id);

        return view('/edit', ['group' => $group]);
    }





    public function __construct()
    {
        $this->middleware('auth');
    }


    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();
        return redirect('/');
    }
}