<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('/')}}" class="brand-link" style="margin-top: 8px" height="300px" width="">
    <img src="{{ asset('assets/img/logo.jpeg') }}" href="{{url('/')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity:.8"  >

    <span class="brand-text font-weight-bolder font-size-300px">Feqra</span>
    <div class="info">
      <h5 style=" color:#53A798; display: inline-block; margin-right: 10px;margin-top:20px;margin-left:10px">Welcome back,  {{ session('admin_name') }}</h5>
  </div>
  </a>
  
  
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    

    <!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="{{url('admin_dashboard/home')}}" class="nav-link">
        <i class="fas fa-home nav-icon"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{url('admin_dashboard/categories')}}" class="nav-link">
        <i class="fas fa-users nav-icon"></i>
        <p>Categories</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{url('admin_dashboard/courses')}}" class="nav-link">
        <i class="fas fa-users nav-icon"></i>
        <p>Courses</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{url('admin_dashboard/messages')}}" class="nav-link">
        <i class="fas fa-users nav-icon"></i>
        <p>Messages</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{url('admin_dashboard/admins')}}" class="nav-link">
        <i class="fas fa-users nav-icon"></i>
        <p>Admins</p>
      </a>
    </li>
  </ul>
  <div class="container">
    <a href="{{url('dashboard_logout')}}" class="btn btn-danger" style="margin-top: 15px;margin-left: 10px">Logout</a>
  </div>
</nav>
<!-- /.sidebar-menu -->

  </div>
  <!-- /.sidebar -->
</aside>
