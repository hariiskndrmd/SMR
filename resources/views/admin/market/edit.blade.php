@extends('admin.layouts.app')

@section('content')

<div class="card shadow m-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Edit Market</h6>
    </div>
    <div class="card-body">
        <div class="table-responsives">
            <form action="{{route('market.update', $market->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6 text-center">
                    <img class="image mb-2 img-fluid" width="200px" src="{{asset('images/market/'.$market->flag)}}">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$market->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Flag</label>
                        <div class="col-sm-7">
                          <input type="file" class="form-control-file" id="image" name="image"></div>
                      </div>
                </div>
                <div class="col-md-12 text-right">
                    <a href="{{route('carousel.index')}}" class="btn btn-secondary">Back</a href="#">
                    <button type="submit" class="btn btn-primary">Upadate</button> 
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
    
@endsection