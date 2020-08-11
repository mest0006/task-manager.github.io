@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h1> {{ Auth::user()->name }} </h1>   </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    <main class="container">
                        <div class="row justify-content-center">
                          <div class="col-8">
                      <h1 class="display-4"> Task Manager</h1>
                      <ul class="list-group">
                      @foreach( $task as $item)
                      <li class="list-group-item d-flex align-items-center">
                        <form action="/item/{{ $item->id }}" method="post"
                           >
                      
                           @csrf
                            @method('put')
                      
                      <input type="hidden" name="checked" value="{{ $item->checked ? 0 : 1 }} ">
                      
                      <button class="btn 
                      @if($item->checked)
                        btn-success
                        @else
                      btn-light
                      @endif "><i class="fas fa-check"></i></button>
                      
                        </form>
                        <span class="ml-3" @if($item->checked) style="text-decoration:line-through" @endif>
                          {{ $item->description }}
                        </span>
                      
                        <form  class="ml-auto" action="/item/{{ $item->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger"><i class=" fas fa-trash-alt"></i> </button>
                        </form>
                       
                      </li>
                      @endforeach
                      <li class="list-item-group d-flex align-items-center">
                        <form action="/item" method="post">
                          @csrf
                          <input class="form-control" type="text" name="description">
                      </li>
                      </ul>
                          </div>
                        </div>
                      </main>
                                    <div class="card">
                                        <h5 class="card-header"> New item </h5>
                                        <div class="card-body">
                                          <form method="post" action="/item">
                                            @csrf
                                            <input type="hidden" name="" value="">                        <div class="row">
                                                <div class="col">
                                                    <input class="form-control" type="text" name="name" placeholder="Group Title">
                                                </div>
                                                <div class="col">
                                                    <select class="form-control" name="color">
                                                        <option>Select a Color</option>
                                                        <option value="success">Red</option>
                                                        <option value="primary">Blue</option>
                                                        <option value="success">Green</option>
                                                        <option value="warning">Orange</option>
                                                        <option value="secondary">Gray</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <button class="btn btn-success">Create Task</button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                        </div>
                                      </div>
                                      
@endsection
