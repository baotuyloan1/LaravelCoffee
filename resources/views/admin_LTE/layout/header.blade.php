  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('dashBoard')}}" class="nav-link">Home</a>
      </li>
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin/user/edit/{{Auth::user()->id}}" class="nav-link">Cập nhật thông tin</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin/logout" class="nav-link">Đăng xuất</a>
      </li>
    </ul>

    <ul  class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->