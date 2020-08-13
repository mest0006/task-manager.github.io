@extends("layouts.app")

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-8">
        <h1 class="display-4">Task  for {{ Auth::user()->name }}</h1>
            <ul class="list-group"> 
            @foreach($tasks as $task)
            <li class="list-group-item d-flex align-items-center"> 
            <form action="/task/{{$task->id}}" method="post">
            @csrf
            @method('put')
            <input type="hidden" name="completed" value="{{$task->completed ? 0 : 1}}">
            <input type="hidden" name="group_id" value="{{$group->id}}">
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
            <input type="hidden" name="group_id" value="{{$group->id}}">
            @method('delete')
            <button class="btn btn-danger">
            <i class="fas fa-trash-alt"></i>
            </button>
            </form>
            </li>
            @endforeach 
            <li class="list-group-item">
           
            
            



            <div class="card">
              <h5 class="card-header"> New Task  </h5>
              <div class="card-body">
                <form method="post" action="/task">  
                  @csrf 
                  
                  <input type="hidden" name="group_id" value="{{$group->id}}">
                                    <div class="row">
                      <div class="col">
                       
                          <input class="form-control" type="text" name="description" placeholder="Add  Task">
                      </div>
                     
                  </div>
                  <div class="row mt-3">
                      <div class="col">
                          <button class="btn btn-success">Add Task</button>
                      </div>
                  </div>
              </form>
              
              </div>
            </div>


            </li>






            </ul>
        </div>
    </div>
    </div>
@endsection