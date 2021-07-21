@extends('admin.layouts.app')

@section('content')

<div class="card shadow m-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Edit Image</h6>
    </div>
    <div class="card-body">
        <div class="table-responsives">
            <form action="{{route('image.update', $image->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6 text-center">
                    <img class="image mb-2 img-fluid" width="200px" src="{{asset('images/detail/'.$image->image)}}">
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="kategory" class="col-sm-2 col-form-label">Product</label>
                        <div class="col-sm-12">
                          <select id="kategory" class="form-control col-form-label" name="product">
                              <option value="{{$image->products->id}}">{{$image->products->product_name}}</option>
                            @foreach ($product as $products)
                            <option value="{{$products->id}}">{{$products->product_name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-7">
                          <input type="file" class="form-control-file" id="image" name="image"></div>
                      </div>
                </div>
                <div class="col-md-12 text-right">
                    <a href="{{route('image.index')}}" class="btn btn-secondary">Back</a href="#">
                    <button type="submit" class="btn btn-primary">Upadate</button> 
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
    
@endsection