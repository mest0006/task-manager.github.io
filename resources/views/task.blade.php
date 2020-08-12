@extends("layouts.app")

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-8">
        <h1 class="display-4">Task List for</h1>
            <ul class="list-group"> 
            @foreach($tasks as $task)
            <li class="list-group-item d-flex align-items-center"> 
            <form action="/task/{{$task->id}}" method="post">
            @csrf
            @method('put')
            <input type="hidden" name="checked" value="{{$task->checked ? 0:1}}">
            <button class="btn
            @if ($task->checked)
            btn-success
            @else
            btn-light
            @endif"><i class="fas fa-check"></i></button>
            </form>
            <span class="ml-3" @if($task->completed)  style="text-decoration:line-through" @endif > 
            {{$task ->description}} 
            </span>
            <form class="ml-auto" action="/task/{{$task->id}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger">
            <i class="fas fa-trash-alt"></i>
            </button>
            </form>
            </li>
            @endforeach 
            <li class="list-group-item">
            <form method="post" action="/task">  
            @csrf 
            <input type="text" name="description">
            </form > 
            </li>
            </ul>
        </div>
    </div>
    </div>
@endsection