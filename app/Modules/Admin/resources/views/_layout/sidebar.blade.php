<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="#" class="nav-link @yield('home-active')">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="nav-item @yield('admins-menu-open')">
      <a href="#" class="nav-link @yield('admins-active')">
        <i class="nav-icon fas fa-users"></i>
        <p>
          Admins
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('admins.admin.index')}}" class="nav-link @yield('admins-view-active')">
            <i class="fa fa-eye nav-icon"></i>
            <p>View</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admins.admin.create')}}" class="nav-link @yield('admins-create-active')">
            <i class="fa fa-plus nav-icon"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Categories
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-eye nav-icon"></i>
            <p>View</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-plus nav-icon"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>
          Products
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-eye nav-icon"></i>
            <p>View</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-plus nav-icon"></i>
            <p>Create</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fa fa-wrench"></i>
        <p>Services</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fa fa-envelope"></i>
        <p>Troubleshooting</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fa fa-envelope"></i>
        <p>Contact Messages</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fa fa-cog"></i>
        <p>Website Settings</p>
      </a>
    </li>
    <li class="nav-item">
        <p><hr></p>
    </li>
    <li class="nav-item">
      <a href="{{route('admins.logout')}}" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Logout</p>
      </a>
    </li>
  </ul>

</nav>
