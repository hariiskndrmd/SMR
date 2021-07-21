@extends('user.layout.app')

@section('content')
    
<div class="top-shadow"></div>

<div class="inner-page">
<div class="slider-item" style="background-image: url('images/carousel.jpg');">
    
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
          <h1 class="pt-5"><span>About Us</span></h1>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- END slider -->
</div>
<section class="section">
  <div class="container">
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-8 text-center">
        <h2 class="heading mb-4">VISION</h2>
        <p class="mb-5 lead">Become a leading trading company, trusted and qualified.</p>
      </div>
    </div>
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-8 text-center">
        <h2 class="heading mb-4">MISSION</h2>
        <p class="mb-5 lead">Continue to develop services and a broad network to meet customer needs in an effort to promote the economy.</p>
      </div>
    </div>
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-8 text-center">
        <h2 class="heading mb-4">Meet The Team</h2>
      </div>
    </div>
    <div class="row">
      @foreach ($team as $row)
      <div class="col-lg-4">
        <div class="media d-block media-custom text-center">
          <a href="#" class="link-thumbnail">
            <h3>{{$row->name}}</h3>
          <span class="ion-plus icon"></span>
            <img src="images/team/{{$row->image}}" alt="Image Placeholder" class="img-fluid"></a>
          <div class="media-body">
            <h3 class="mt-0 text-black">{{$row->bridge}}</h3>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    
  </div>
</section>
<!-- END section -->
@endsection