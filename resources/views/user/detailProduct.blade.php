@extends('user.layout.app')

@section('css')
{{-- css --}}
<link rel="stylesheet" href="{{asset('xzoom/dist/xzoom.css') }}" />
<style>
  .card-details {
  padding: 30px;
  border-radius: 10px;
}

.card-details h1 {
  font-size: 26px;
}

.card-details h2 {
  font-size: 20px;
}

.card-details p {
  font-size: 18px;
  color: #000;
}

.gallery .xzoom-container {
  margin-top: 20px;
}

.gallery .xzoom {
  width: 100%;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.gallery .xactive {
  border: 4px solid #071c4d;
}
</style>



@endsection

@section('scripts')
{{-- script --}}

<script src="{{asset('xzoom/dist/xzoom.min.js')}}"></script>
<script>
  $(document).ready(function() {
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomWidth: 500,
      title: false,
      tint: '#333',
      Xoffset: 15
    });
  });
</script>

  
@endsection 

@section('content')
<section class="section">

  <div class="container">
    
    {{-- start --}}
                <div class="row">
                  <div class="col-lg-12">
                    <div class="">
    
                      <div class="gallery">
                        <div class="xzoom-container">
                          <img
                            class="xzoom img-fluid"
                            id="xzoom-default"
                            src="{{asset('images/product/'.$product->product_image)}}"
                            xoriginal="{{asset('images/product/'.$product->product_image)}}"
                          />
                          <div class="xzoom-thumbs">
                            <a href="{{asset('images/product/'.$product->product_image)}}"
                              ><img
                                class="xzoom-gallery"
                                width="200"
                                src="{{asset('images/product/'.$product->product_image)}}"
                                xpreview="{{asset('images/product/'.$product->product_image)}}"
                            /></a>
                            @foreach ($image as $row)
                            <a href="{{asset('images/product/'.$row->image)}}"
                              ><img
                                class="xzoom-gallery"
                                width="200"
                                src="{{asset('images/product/'.$row->image)}}"
                                xpreview="{{asset('images/product/'.$row->image)}}"
                            /></a>
                            @endforeach
                            
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <h2>&ldquo; {{$product->product_name}} &rdquo;</h2>
                  </div>
                </div>
        
                <div class="row">
                  <div class="col-md-12">
                    <p>{{$product->product_deskription}}</p>
                  </div>
                </div>
    
    
    {{-- end --}}
  </div>

@endsection