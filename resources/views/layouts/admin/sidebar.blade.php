  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('rider-index')}}" >
            <i class="mdi mdi-account-plus  menu-icon"></i>
          <span class="menu-title"> Add Rider </span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('allriders')}}" >
            <i class="mdi mdi-bike  menu-icon"></i>
          <span class="menu-title"> Rider Information </span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('shippingstatus')}}" >
            <i class="mdi mdi-truck-delivery  menu-icon "></i>
          <span class="menu-title"> Cargo Order </span>
        </a>
      </li>

    </ul>

  </nav>

