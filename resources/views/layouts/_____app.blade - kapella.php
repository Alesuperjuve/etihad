<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Placard Dubai') }}</title>
    <!-- base:css -->
    <link rel="stylesheet" href="kapella/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="kapella/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="kapella/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="kapella/images/favicon.png" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
           
            
    <div class="container-scroller">
				
	<!-- partial:partials/_horizontal-navbar.html -->
    <x-navhorizon></x-navhorizon>

    <!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
          @yield('content')
                    
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<footer class="footer">
					<div class="footer-wrap">
						<div class="d-sm-flex justify-content-center justify-content-sm-between">
						<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">uaebizit.com </a>2025</span>
						
						</div>
					</div>
				</footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
    </div>
		<!-- container-scroller -->
    <!-- base:js -->
    <script src="kapella/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="kapella/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="kapella/vendors/chart.js/Chart.min.js"></script>
    <script src="kapella/vendors/progressbar.js/progressbar.min.js"></script>
		<script src="kapella/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
		<script src="kapella/vendors/justgage/raphael-2.1.4.min.js"></script>
		<script src="kapella/vendors/justgage/justgage.js"></script>
    <script src="kapella/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- Custom js for this page-->
    <script src="kapella/js/dashboard.js"></script>
    <!-- End custom js for this page-->

    @yield('scripts')
  </body>
</html>