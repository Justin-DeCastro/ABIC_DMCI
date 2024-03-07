<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">DMCI</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 sidebar">
        <!-- Your sidebar menu items here -->


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('index')}}" class="nav-link">
                    <i class="fas fa-chart-bar"></i>

                    <p>Dashboard
                        <span class="badge badge-info right"></span>
                    </p>

                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('card.index') }}" class="nav-link">

                    <i class="nav-icon fas fa-images"></i>
                    <p>
                         Carousel Site Progress
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('mid.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-building"></i>
                    <p>
                         MID RISE CONDO
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('city.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                         Properties near your City
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('leisure.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-cocktail"></i>
                    <p>
                         Leisure
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('high.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-building"></i>
                    <p>
                         HIGH RISE CONDO
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('subdivision.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-building"></i>
                    <p>
                        Subdivision
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('certification.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-award"></i>
                    <p>
                        Certification and Awards
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('mission.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-bullseye"></i>
                    <p>
                         Mission
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('reco.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-thumbs-up"></i>
                    <p>
                        Recommended
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('testimonial.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-comment"></i>
                    <p>
                        Testimonial
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('events.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>
                         Event
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('promo.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>
                        Promo
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('kaakbay.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-hands-helping"></i>
                    <p>
                        Kaakbay
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('news.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>
                        NEWS and Updates
                        {{-- <i class="fas fa-angle-left right"></i> --}}
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>


    <style>
        .sidebar {
            position: sticky;
            top: 0;
            width: 250px; /* Set the width as needed */
            max-width: 100%; /* Ensure it doesn't overflow horizontally */
            height: calc(250vh - 150px); /* Adjust height as needed */
            overflow-y: auto;
            padding-top: 20px; /* Adjust padding as needed */
        }
    </style>