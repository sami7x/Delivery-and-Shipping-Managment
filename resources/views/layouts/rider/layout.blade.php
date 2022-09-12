@include("layouts.rider.head")


  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.rider.header')
    <!-- container -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.rider.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layouts.rider.footer')
