<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{url('adminproduct')}}" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          {{-- <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="admin dash/pages/ui-features/buttons.html">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="/admin dash/pages/ui-features/dropdowns.html">Dropdowns</a></li>
            <li class="nav-item"> <a class="nav-link" href="admin dash/pages/ui-features/typography.html">Typography</a></li>
          </ul> --}}
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{url('adminorders')}}" aria-expanded="false" aria-controls="form-elements">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Orders</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          {{-- <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="admin dash/pages/forms/basic_elements.html">Basic Elements</a></li>
          </ul> --}}
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{url('admincarts')}}" aria-expanded="false" aria-controls="charts">
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Carts</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          {{-- <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="admin dash/pages/charts/chartjs.html">ChartJs</a></li>
          </ul> --}}
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="{{url('adminproduct')}}" aria-expanded="false" aria-controls="tables">
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">Order Items</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="admin dash/pages/tables/basic-table.html">Basic table</a></li>
          </ul>
        </div>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link"  href="{{url('adminuserdetail')}}" aria-expanded="false" aria-controls="auth">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Profile</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="admin dash/pages/samples/login.html"> Profile </a></li>
            <li class="nav-item"> <a href="{{route('logout')}}"> Logout </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
          <i class="icon-ban menu-icon"></i>
          <span class="menu-title">Error pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="error">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="admin dash/pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="admin dash/pages/samples/error-500.html"> 500 </a></li>
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{url('adminuserdetail')}}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">User Status</span>
        </a>
      </li> --}}
    </ul>
  </nav>
