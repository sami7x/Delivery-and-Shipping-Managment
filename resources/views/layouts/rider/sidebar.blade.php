<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('riderdashboard')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('shipping')}}" >
            <i class="mdi mdi-bike menu-icon"></i>
          <span class="menu-title"> Pickup </span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('cargodetail')}}" >
            <i class="mdi mdi-truck-delivery menu-icon"></i>
          <span class="menu-title"> Cargo </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('pickedup')}}" >
            <i class="mdi mdi-trophy-outline  menu-icon"></i>
          <span class="menu-title"> Picked Up </span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('dropped')}}" >
            <i class="ti-truck menu-icon"></i>
          <span class="menu-title"> Dropped </span>
        </a>
      </li>


    </ul>

  </nav>

