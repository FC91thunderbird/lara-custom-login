<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
  data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />

  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
@vite(['resources/assets/css/app.css', 'resources/assets/js/app.js'])
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">

      <!-- Menu -->
    @include('components.sidebar')
      <!-- / Menu -->
      
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        @include('components.topbar')
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
             
            @yield('content')

            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          @include('components.footer')
          
          <!-- / Footer -->

        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
  </div>





  <!-- Add this to your layout file -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <!-- / Layout wrapper -->
  @if(session('success'))
    <script>
        toastr.success("{{ session('success') }}", "Success", {
            closeButton: true,
            progressBar: true,
        });
    </script>
@endif
</body>
</html>