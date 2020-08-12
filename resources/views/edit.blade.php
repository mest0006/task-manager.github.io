<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
               
                <div class="card-body">
                   
                @foreach($group as $groups)
                <div class="d-flex align-items-center justify-content-between mb-3">




                    
                    <a href="/list/edit/{{$groups->id}}" class="btn btn-light"><i class="fas fa-pencil-alt"></i></a>
                    <a href="/list" class="btn btn-outline-{{$groups->color}} btn-lg btn-block mx-3">  {{$groups->name}}</a>
                    <form method="post" action="/item/{{ $groups->id}}">
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
</body>
</html>