  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/landing" class="brand-link">
      <img src={{asset('img/c.png')}} alt="AdminLTE Logo" class="img-circle elevation-2" height="42" width="42"style="opacity: .8">
      <span class="brand-text font-weight-light">Amal-app</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{asset('img/user2-160x160.jpg')}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name; }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ (request()->is('dashboard*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Dashboard
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>

            <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/masters" class="nav-link {{ (request()->is('masters*')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Master</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/santris" class="nav-link {{ (request()->is('santris*')) ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Santri</p>
                  </a>
                </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/posts" class="nav-link {{ (request()->is('posts*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Posts
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
