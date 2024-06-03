<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="stylesheet" href="{{ asset('assets/backend/css/styles.min.css') }}" />
  <!-- dropify -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/libs/dropify/css/dropify.css')}}">
  <!-- summernote bootstrap 4 -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/libs/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/libs/summernote/custom/bootstrap.min.css')}}">
  <script src="{{ asset('assets/backend/libs/summernote/custom/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('assets/backend/libs/summernote/custom/popper.min.js') }}"></script>
  <script src="{{ asset('assets/backend/libs/summernote/custom/bootstrap.min.js') }}"></script>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
  <!-- Sidebar Start -->
  @include('backend.partials.sidebar')
  <!--  Sidebar End -->
  <!--  Main wrapper -->
  <div class="body-wrapper">
    <!--  Header Start -->
    @include('backend.partials.header')
    <!--  Header End -->
    @yield('content')

  </div>
</div>
<script src="{{ asset('assets/backend/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('assets/backend/js/app.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/backend/libs/simplebar/dist/simplebar.js') }}"></script>
<script src="{{ asset('assets/backend/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/backend/libs/dropify/js/dropify.js') }}"></script>
<script src="{{ asset('assets/backend/libs/summernote/summernote-bs4.min.js') }}"></script>

@yield('scripts')
</body>

</html>