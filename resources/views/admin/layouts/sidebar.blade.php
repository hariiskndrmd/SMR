
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-fw fa-industry"></i>
                    {{-- <img src="{{asset('admin/img/logo.png')}}" width="30" height="30" alt=""> --}}
                </div>
                <div class="sidebar-brand-text mx-1">Admin <sup>SMR</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
               <!-- Heading -->
            <div class="sidebar-heading">
                Style
            </div>

             <!-- Nav Item - carousel -->
             <li class="nav-item {{ (request()->is('dashboard/carousel')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('carousel.index')}}">
                    <i class="fab fa-fw fa-slideshare"></i>
                    <span>Carousel</span></a>
            </li>
             
             <!-- Nav Item - market -->
             <li class="nav-item {{ (request()->is('dashboard/market')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('market.index')}}">
                    <i class="fas fa-fw fa-cart-plus"></i>
                    <span>Market</span></a>
            </li>
             <!-- Nav Item - teams -->
             <li class="nav-item {{ (request()->is('dashboard/team')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('team.index')}}">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Teams</span></a>
            </li>
              <!-- Divider -->
              <hr class="sidebar-divider">
              <!-- Heading -->
                <div class="sidebar-heading">
                    Product
                </div>
            <!-- Nav Item - product -->
            <li class="nav-item {{ (request()->is('dashboard/product')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('product.index')}}">
                    <i class="fas fa-fw fa-project-diagram"></i>
                    <span>Add Product</span></a>
            </li>
            <li class="nav-item {{ (request()->is('dashboard/image')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('image.index')}}">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Add Image</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

             <!-- Nav Item - admin -->
             <li class="nav-item {{ (request()->is('dataAdmin')) ? 'active' : '' }}">
             <a class="nav-link" href="{{route('admin.index')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Date Admin</span></a>
            </li>
           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->