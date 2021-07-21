@extends('user.layout.app')

@section('content')
    
<div class="top-shadow"></div>
<section class="home-slider owl-carousel">
@foreach ($carousel as $crsl)
  <div class="slider-item" style="background-image: url('images/carousel/{{$crsl->image}}');z-index: 3;">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12 element-animate">
          <h1 class="mb-4"><span style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">{{$crsl->title}}</span></h1>
          <p class="mb-5 w-75 text-dark">{{$crsl->deskription}}</p>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</section>

<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center element-animate">
        <h2>Vision & Mission</h2>
      </div>
    </div>
    <div class="row align-items-stretch">
      <div class="col-lg-4 order-lg-1 element-animate">
        <div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/800x1000.jpg');"></div></div></div>
      </div>

      
      
      <div class="col-md-8 col-lg-8 feature-1-wrap d-md-flex flex-md-column order-lg-3 mt-3 element-animate" >

        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <div class="col text-center section-vision-heading">
              <h2>VISION</h2>
              <p>Become a leading trading company, trusted and qualified</p>
              <h2>MISSION</h2>
              <p>Continue to develop services and a broad network to meet customer needs in an effort to promote the economy</p>
        </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="section border-t pb-0">
  <div class="container">
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-8 text-center">
        <h2 class=" heading mb-4">Our Latest Projects</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row no-gutters">
      @foreach ($product as $row)
      <div class="col-md-6 element-animate" style="float:none;margin:auto;" >
        <a href="{{route('detailProduct',$row->id)}}" class="link-thumbnail">
          <h3>{{$row->product_name}}</h3>
          <span class="ion-plus icon"></span>
          <img src="{{asset('images/product/'. $row->product_image)}}" alt="Image" class="img-fluid">
        </a>
      </div>
      @endforeach
    </div>
    
  </div>
</section>

<section class="section element-animate">
  <div class="container">
    <div class="row align-items-center mb-5 element-animate">
      <div class="col-lg-7 order-md-2">
        <div class=""><div class="frame"><img src="images/market.jpg" alt="Image" class="img-fluid"></div></div>
      </div>
      <div class="col-md-5 pr-md-5 mb-5 element-animate">
        <div class="block-41">
          <h2 class="block-41-heading mb-5">MARKET</h2>
          <div class="block-41-text">
            <b>PT.Southern Mineral Resources</b><br>
            <p>Indonesia is a country rich in resources. Based on 2015 survey data,
              Indonesia has the potential to develop 124,8 billion tons of coal, of
              which Kalimantan would contribute  approximately 68,6 billion tons.
              The largest deposit is located in East Kalimantan, which accounted for nearly 75% of the total national coal export. Southeast Asia will play a significant and key role in balancing the global thermal coal market and its position is anticipated to only be enhanced in the future. The main markets for thermal coal from Borneo are India, China, Malaysia, Singapore, Bangladesh and Pakistan.
            </p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<section class="section-speech-heading element-animate"
id="speech-heading">
  <div class="container">
    <div class="row">
      <div class="col text-center element-animate">
       <h2>SPEECH BY DIRECTOR</h2>
      </div>
    </div>
  </div>
</section>

<div class="section section-speech-director" id="speechdirector">
  <div class="container">
    <div class="section-busines-content row justify-content-center">
      @foreach ($team as $teams)
      <div class="col-sm-6 col-md-6 col-lg-4 element-animate">
        <div class="card card-speechdirector text-center">
          <div class="speechdirector">
            <img src="{{asset('images/team/'.$teams->image)}}" alt="directors" class="mb-4 rounded-circle img-fluid">
            <h3 class="mb-4">{{$teams->name}}</h3>
            <p class="speech">
              {{$teams->deskription }}
            </p>
          </div>
          <hr/>
          <p class="name-director mt-2">
              {{$teams->bridge}}
          </p>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div> 

<!-- END section -->
@endsection