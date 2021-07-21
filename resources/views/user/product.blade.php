@extends('user.layout.app')

@section('content')

<div class="top-shadow"></div>

<div class="inner-page">
<div class="slider-item" style="background-image: url('images/carousel.jpg')">
    
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
          <h1 class="pt-5"><span>Our Product</span></h1>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- END slider -->
</div>

<section class="section border-t pb-0">
  <div class="container">
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-8 text-center">
        <h2 class=" heading mb-4">Our Latest Product</h2>
        <p class="lead"> 
          EXPORT - IMPORT
        </p>
        <p class="mb-5 lead"> 
          COAL - CRUDE PALM OIL - CEMENT CLINKER - LIMESTONE
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row no-gutters">
      @foreach ($product as $row)
      <div class="col-md-6 element-animate" style="float:none;margin:auto;">
        <a href="{{route('detailProduct', $row->id)}}" class="link-thumbnail">
          <h3>{{$row->product_name}}</h3>
          <span class="ion-plus icon"></span>
          <img src="{{asset('images/product/'. $row->product_image)}}" alt="Image" class="img-fluid">
        </a>
      </div>
      @endforeach
     
    </div>
    
  </div>
</section>
<!-- END section -->
@endsection