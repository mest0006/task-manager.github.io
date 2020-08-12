@foreach($group as $groups)
<div class="d-flex align-items-center justify-content-between mb-3">
    <a href="/list/edit/{{$groups->id}}" class="btn btn-light"><i class="fas fa-pencil-alt"></i></a>
    <a href="/list/{{$groups->id}}" class="btn btn-outline-success btn-lg btn-block mx-3">  {{$groups->name}}</a>
    <form method="post" action="/list/{{$groups->id}}">
        @csrf
        @method('delete')
        <input type="hidden" name="_token" value="x1stpxJZG8Zvm52t9ROdBr14CXbAaFwRXSt7uoHF">                            <input type="hidden" name="_method" value="delete">                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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