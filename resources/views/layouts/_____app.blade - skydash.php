<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Placard Dubai') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="skydash/src/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="skydash/src/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="skydash/src/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="skydash/src/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="skydash/src/assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="skydash/src/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="skydash/src/assets/images/favicon.png" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:skydash/src/partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <!-- <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="skydash/src/index.html"><img src="skydash/src/assets/images/logo.svg" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="skydash/src/index.html"><img src="skydash/src/assets/images/logo-mini.svg" alt="logo" /></a>
  </div> -->
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <h3 class="font-weight-500 ms-5 mt-2 text-primary navbar-brand brand-logo">DUBAI</h3>
        <h5 class="font-weight-500 text-primary navbar-brand brand-logo-mini">BIZ</h5>
  </div>
  
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <!-- <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <i class="icon-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search by Infiniferro Dubai" aria-label="search" aria-describedby="search">
        </div>
      </li> -->
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      
      <li class="nav-item dropdown">
        <button type="button" class="btn btn-md btn-outline-primary btn-fw">{{ Auth::user()->name }}</button>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="skydash/src/assets/images/faces/face28.jpg" alt="profile" />
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-settings text-primary"></i> Akun  </a>
          
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="ti-power-off text-primary"></i> {{ __('Log Out') }} 
                                    </a>
                            </form>
                    
        </div>
      </li>
      <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="#">
          <i class="icon-ellipsis"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <x-navside />
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:skydash/src/partials/_footer.html -->
          <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024  <a href="#">UAE IT BIZ</a> Dubai. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Infiniferro<i class="ti-heart text-danger ms-1"></i></span>
  </div>
</footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="skydash/src/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="skydash/src/assets/js/off-canvas.js"></script>
    <script src="skydash/src/assets/js/template.js"></script>
    <script src="skydash/src/assets/js/settings.js"></script>
    <script src="skydash/src/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
    @yield('scripts')
  </body>
</html>