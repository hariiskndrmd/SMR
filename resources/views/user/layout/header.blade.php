{{--   
    <header role="banner">
      <nav id="" class="navbar main-navbar navbar-expand-lg fixed-top navbar-dark bg-dark" data-aos="fade-down"
      data-aos-duration="1500">
          <div class="container">
            <a class="navbar-brand " href="index.html">
                  <img src="{{asset('images/logo.png')}}" width="50" height="50" alt="">  
                  SMR
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarsExample05">
              <ul class="navbar-nav pl-md-5 ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('product')}}">Produk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('product')}}">Market</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
              </ul>
  
            
            </div>
          </div>
        </nav>
<!-- End Navbar Media -->
      </header> --}}

    <!-- Start Navbar Web -->
    <nav id="web" class="navbar main-navbar navbar-expand-lg fixed-top navbar-light" data-aos="fade-down"
        data-aos-duration="1500">
        <div class="container">
            <span class="navbar-brand mb-0 h1">
              <img src="{{asset('images/brand.png')}}" width="50" height="50" alt="">  
            </span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a class="nav-link active" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item {{ (request()->is('product')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('product')}}">Product</a>
                  </li>
                  <li class="nav-item {{ (request()->is('market')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('market')}}">Market</a>
                  </li>
                  <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                  </li>
                  <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar Web -->

    <!-- Start Navbar Media -->
    <nav id="media" class="navbar main-navbar navbar-expand-lg fixed-top navbar-light" data-aos="fade-down"
        data-aos-duration="1500">
        <div class="container">
            <span class="navbar-brand mb-0 h1">
                <img src="{{asset('images/brand.png')}}" width="40" height="40" alt="">
            </span>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a class="nav-link active" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item {{ (request()->is('product')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('product')}}">Product</a>
                  </li>
                  <li class="nav-item {{ (request()->is('market')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('market')}}">Market</a>
                  </li>
                  <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                  </li>
                  <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar Media -->