@extends('user.layout.app')

@section('content')
    
<div class="top-shadow"></div>

<div class="inner-page">
<div class="slider-item" style="background-image: url('images/carousel.jpg');">
    
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
          <h1 class="pt-5"><span>Contact Us</span></h1>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- END slider -->
</div>

<section class="section border-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5 order-2">
        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
        <form action="{{route('mail')}}" method="post">
          @csrf
          @method('post')
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control ">
            </div>
            <div class="col-md-6 form-group">
              <label for="phone">Phone</label>
              <input type="text" id="phone" name="phone" class="form-control ">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control ">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  <strong>Subject:</strong>
                  <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                  @if ($errors->has('subject'))
                      <span class="text-danger">{{ $errors->first('subject') }}</span>
                  @endif
              </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="message">Write Message</label>
              <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <button type="submit" class="btn btn-primary px-3 py-3">Send Message</button>
              {{-- <input type="submit" value="Send Message" class="btn btn-primary px-3 py-3"> --}}
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6 order-2 mb-5">
        <div class="row justify-content-right">
          <div class="col-md-8 mx-auto contact-form-contact-info">
            <p class="d-flex">
              <span class="ion-ios-location icon mr-5"></span>
              <span>Raya Kranggan St., Jatisampurna, Bekasi West Java 17435, Indonesia</span>
            </p>

            <p class="d-flex">
              <span class="ion-ios-telephone icon mr-5"></span>
              <span>+62 8122129093</span>
            </p>

            <p class="d-flex">
              <span class="ion-android-mail icon mr-5"></span>
              <span>company@ptsmr.id</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection