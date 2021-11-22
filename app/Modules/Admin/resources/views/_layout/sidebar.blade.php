<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="{{route('admins.home')}}" class="nav-link @yield('home-active')">
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
        <li class="nav-item">
          <a href="{{route('admins.admin.trashed')}}" class="nav-link @yield('admins-trash-active')">
            <i class="fa fa-trash nav-icon"></i>
            <p>
              Trash<span class="right badge badge-danger">{{$adminTrashesCount}}</span>
            </p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item @yield('categories-menu-open')">
      <a href="#" class="nav-link @yield('categories-active')">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Categories
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('admins.category.index')}}" class="nav-link @yield('categories-view-active')">
            <i class="fa fa-eye nav-icon"></i>
            <p>View</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admins.category.create')}}" class="nav-link @yield('categories-create-active')">
            <i class="fa fa-plus nav-icon"></i>
            <p>Create</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admins.category.trashed')}}" class="nav-link @yield('categories-trash-active')">
            <i class="fa fa-trash nav-icon"></i>
            <p>
              Trash<span class="right badge badge-danger">{{$categoryTrashesCount}}</span>
            </p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item @yield('products-menu-open')">
      <a href="#" class="nav-link @yield('products-active')">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>
            Products
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('admins.product.index')}}" class="nav-link @yield('products-view-active')">
            <i class="fa fa-eye nav-icon"></i>
            <p>View</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admins.product.create')}}" class="nav-link @yield('products-create-active')">
            <i class="fa fa-plus nav-icon"></i>
            <p>Create</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admins.product.trashed')}}" class="nav-link @yield('products-trash-active')">
            <i class="fa fa-trash nav-icon"></i>
            <p>
              Trash<span class="right badge badge-danger">{{$productTrashesCount}}</span>
            </p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item @yield('services-menu-open')">
      <a href="#" class="nav-link @yield('services-active')">
        <i class="nav-icon fa fa-wrench"></i>
        <p>
          Services
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('admins.service.index')}}" class="nav-link @yield('services-view-active')">
            <i class="fa fa-eye nav-icon"></i>
            <p>View</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admins.service.create')}}" class="nav-link @yield('services-create-active')">
            <i class="fa fa-plus nav-icon"></i>
            <p>Create</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admins.service.trashed')}}" class="nav-link @yield('services-trash-active')">
            <i class="fa fa-trash nav-icon"></i>
            <p>
              Trash<span class="right badge badge-danger">{{$serviceTrashesCount}}</span>
            </p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="{{route('admins.troubleshooting.index')}}" class="nav-link @yield('troubleshooting-active')">
        <i class="nav-icon fa fa-exclamation-triangle" aria-hidden="true"></i>
        <p>Troubleshooting</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{route('admins.contact.index')}}" class="nav-link @yield('contact-active')">
        <i class="nav-icon fa fa-envelope"></i>
        <p>Contact Messages</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{route('admins.settings.index')}}" class="nav-link @yield('settings-active')">
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
