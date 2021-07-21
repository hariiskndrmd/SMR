@extends('user.layout.app')

@section('content')

<div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url('images/carousel.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Market</span></h1>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- END slider -->
    </div>

    <section class="section blog">
      <div class="container">

        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4">Our Market</h2>
            <p class="mb-5 lead">Indonesia is a country rich in resources. Based on 2015 survey data, Indonesia has the potential to develop 124,8 billion tons of coal, of which Kalimantan would contribute  approximately 68,6 billion tons. The largest deposit is located in East Kalimantan, which accounted for nearly 75% of the total national coal export.
              Southeast Asia will play a significant and key role in balancing the global thermal coal market and its position is anticipated to only be enhanced in the future. The main markets for thermal coal from Borneo are India, China, Malaysia, Singapore, Bangladesh and Pakistan.
              </p>
            <p class="mb-5 lead">Southeast Asia will play a significant and key role in balancing the global thermal coal market and its position is anticipated to only be enhanced in the future. The main markets for thermal coal from Borneo are India, China, Malaysia, Singapore, Bangladesh and Pakistan.
            </p>
          </div>
        </div>

        <div class="row">
            @foreach ($market as $row)
            <div class="col-md-4">
                <div class="media mb-4 d-md-flex d-block element-animate">
                    <div class="row">
                      <div class="col-md-12 text-center">
                          <img src="images/market/{{$row->flag}}" width="400px" class="img-fluid">
                      </div>
                    <div class="col-md-12 text-center">
                        <div class="media-body">
                        <h3 class="mt-2 mb-2 text-black"><a href="#">{{$row->name}}</a></h3>
                        </div>
                        </div>
                    </div>
                
                </div>
            </div>
            @endforeach
            
      </div>
    </section>

@endsection