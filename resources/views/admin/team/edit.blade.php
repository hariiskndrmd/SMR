@extends('admin.layouts.app')

@section('content')

<div class="card shadow m-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Edit Team</h6>
    </div>
    <div class="card-body">
        <div class="table-responsives">
            <form action="{{route('team.update', $team->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <img class="image mb-2 img-fluid" src="{{asset('images/team/'.$team->image)}}">
                </div>
                <div class="col-md-6">
                    <h3 class="mt-3">Form Edit</h3>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$team->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Bridge</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('bridge') is-invalid @enderror" id="bridge" name="bridge" value="{{$team->bridge}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskription">Deskription</label>
                        <div class="input-group">
                            <textarea class="form-control" required="required" rows="9" name="deskription" id="deskription"class="form-control @error('deskription') is-invalid @enderror">{{$team->deskription}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-7">
                          <input type="file" class="form-control-file" id="image" name="image"></div>
                      </div>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{route('team.index')}}" class="btn btn-secondary">Back</a href="#">
                    <button type="submit" class="btn btn-primary">Upadate</button> 
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
    
@endsection