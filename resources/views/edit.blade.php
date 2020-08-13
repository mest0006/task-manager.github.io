@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1 class=" row justify-content-center text-{{$groups->color}}"> {{ Auth::user()->name }} </h1>
            
                    <div class="card">
                        <div class="card-header"><h2>Edit List</h2></div>
                        <div class="card-body">
                            <form method="post" action="/list/update/{{$groups->id}}">
                              @csrf
                           @method('put')
                                               <div class="row">
                                    <div class="col">
                                        <input class="form-control" type="text" name="name" value="{{$groups->name}}">
                                    </div>
                                    <div class="col">
                                        <select class="form-control" name="color">
                                            <option>Select a Color</option>
                                                                                    <option value="danger">Red</option>
                                                                                    <option value="primary" selected="color-{{$groups->color}}">Blue</option>
                                                                                    <option value="success">Green</option>
                                                                                    <option value="warning">Orange</option>
                                                                                    <option value="secondary">Grey</option>
                                             
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <button class="btn btn-success">Update List</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection
