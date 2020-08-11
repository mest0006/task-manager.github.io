<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Group;



class GroupController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $group->save();

        return redirect('/');
    }
}