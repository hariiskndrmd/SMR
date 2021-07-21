@extends('admin.layouts.app')

@section('content')

<div class="card shadow m-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Edit Carosel</h6>
    </div>
    <div class="card-body">
        <div class="table-responsives">
            <form action="{{route('carousel.update', $carousel->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <img class="image mt-5 mb-5 img-fluid" src="{{asset('images/carousel/'.$carousel->image)}}">
                </div>
                <div class="col-md-6">
                    <h3 class="mt-3">Form Edit</h3>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$carousel->title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskription">Deskription</label>
                        <div class="input-group">
                            <textarea class="form-control" required="required" rows="6" name="deskription" id="deskription"class="form-control @error('deskription') is-invalid @enderror">{{$carousel->deskription}}</textarea>
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
                    <a href="{{route('carousel.index')}}" class="btn btn-secondary">Back</a href="#">
                    <button type="submit" class="btn btn-primary">Upadate</button> 
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
    
@endsection