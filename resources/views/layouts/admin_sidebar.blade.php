 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <<router-link to="/home" class="brand-link"> 
      <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </router-link>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <router-link to="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </router-link>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Admin Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/list-user" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
               User
                
              </p>
            </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/list-role" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Role
                
              </p>
            </router-link>
              </li>
            </ul>
          </li>
           <li class="nav-item ">
            <router-link to="/list-category" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Category
                
              </p>
            </router-link>
          </li>
          <li class="nav-item ">
            <router-link to="/list-subcategory" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Sub Category
                
              </p>
            </router-link>
          </li>
           <li class="nav-item ">
            <router-link to="/list-content" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Content
                
              </p>
            </router-link>
          </li>

           <li class="nav-item ">
            <router-link to="/list-post" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Post
                
              </p>
            </router-link>
          </li>

           <li class="nav-item ">
            <router-link to="/list-fronthf" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Header Footer
                
              </p>
            </router-link>
          </li>

        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Admin Controll
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                           <i class="nav-icon fas fa-th"></i>
               <p>            
              {{ __('Logout') }}
            </p>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
{{--   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> --}}
