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
                @foreach($group as $groups)
                {{$groups->name}}
                {{$groups->color}}
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
