

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PT.SOUTHERN MINERAL RESOURCES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" href="{{asset('images/brand.png')}}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">

    @yield('css')
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

  </head>
  <body>
    @include('user.layout.header')
    <!-- END header -->
    @yield('content')
    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-1">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">PT. SOUTHERN MINERAL RESOURCES <br>
              The date of establishment of the company 12 January 2010</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-md-5 mb-5 pl-md-5">
            <h3>Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Address:</span>
                <span >Raya Kranggan St., Jatisampurna, Bekasi West Java 17435, Indonesia</span></li>
              <li class="d-block"><span class="d-block">Telephone:</span><span >+628122129093</span></li>
              <li class="d-block"><span class="d-block">Email:</span><span >company@ptsmr.id</span></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="{{route('home')}}">Home</a></li>
              <li><a href="{{route('product')}}">Product</a></li>
              <li><a href="{{route('product')}}">Market</a></li>
              <li><a href="{{route('about')}}">About</a></li>
              <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
          <div class="col-12 text-center text-left">
             <p>
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> SMR
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{asset('js/popper.min.js') }}"></script>
    <script src="{{asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{asset('js/main.js') }}"></script>
    @yield('scripts')
  </body>
</html>