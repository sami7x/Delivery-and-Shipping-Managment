<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="http://127.0.0.1:8000/resources/admin/images/logo-mini.svg" class="mr-2" alt="logo">EXPRESS</a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('resources/admin/images/logo-mini.svg')}}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="{{ route('riderprofile') }}">
            <img src="{{asset('resources/admin/images/faces/face28.jpg')}}" alt="profile"/>
          </a>
        </li>
        <li class="nav-item nav-profile dropdown">
          <a  class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <i class="icon-ellipsis"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item">
              <i class="ti-settings text-primary"></i>
              Settings
            </a>
            <a class="dropdown-item" >
              <i class="ti-power-off text-primary" ></i>
              Logout
            </a>
          </div>
        </li>
      </ul>

    </div>
  </nav>
