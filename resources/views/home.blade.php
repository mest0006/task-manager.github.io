@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="  row h1 justify-content-center"> {{ Auth::user()->name }}'s List </h1>
 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h1> List {{$group->count()}} </h1>   </div>
                  
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                @foreach($group as $groups)
                <div class="d-flex align-items-center justify-content-between mb-3">


                    
                    <a href="/list/edit/{{$groups->id}}" class="btn btn-light"><i class="fas fa-pencil-alt"></i></a>
                    <a href="/task/{{ $groups->id }}" class="btn btn-outline-{{$groups->color}} btn-lg btn-block mx-3">  {{$groups->name}}</a>
                    <form method="post" action="/list/{{ $groups->id}}">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="_method" value="delete">
                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </div>
                @endforeach
                                    <div class="card">
                                        <h5 class="card-header"> New item </h5>
                                        <div class="card-body">
                                          <form method="POST" action="/item
                                          ">
                                          @csrf
                                     
                                                              <div class="row">
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
                                                    <button class="btn btn-success">Create List</button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                        </div>
                                      </div>
                                      
@endsection
