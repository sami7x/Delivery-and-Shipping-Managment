@include("layouts.admin.head")


  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.admin.header')
    <!-- container -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
            @include("layouts.admin.setting-panel")
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.admin.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layouts.admin.footer')
