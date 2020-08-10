<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    public function index()
    {
        $group = Group::all();
        return view('group', ['group' => $group]);
    }
}