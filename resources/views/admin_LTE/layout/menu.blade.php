<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
<a href="{{route('dashBoard')}}" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="admin/user/edit/{{Auth::user()->id}}" class="d-block">{{Auth::user()->name}}</a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
                <a href="{{route('dashBoard')}}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
               
              </li>
              
        
        
{{--           
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Forms
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>General Elements</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Advanced Elements</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/editors.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Editors</p>
                    </a>
                  </li>
                </ul>
              </li> --}}


              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">&nbsp;
                 <i class="fas fa-coffee"></i>
                  <p>
                    &nbsp; Sản phẩm
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="{{route('listProduct')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="admin/product/showAddPage" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm sản phẩm</p>
                    </a>
                  </li>
                 
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">    &nbsp;
                  <i class="fas fa-th-list"></i>
                  <p>
                    &nbsp; Thể loại
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="{{route('listCategory')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('addCategory')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm thể loại</p>
                    </a>
                  </li>
                 
                </ul>
              </li>


              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">&nbsp;
                  <i class="fas fa-users"></i>
                  <p>
                    &nbsp; Nhà cung cấp
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="{{route('listProducer')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('addProducer')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm Nhà Cung Cấp</p>
                    </a>
                  </li>
                 
                </ul>
              </li>
              


              @if (Auth::user()->role['roleName'] == "ADMIN")
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">&nbsp;
                  <i class="fas fa-user"></i>
                  <p>
                    &nbsp; Người dùng
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="{{route('listUser')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('addUser')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm Người Dùng</p>
                    </a>
                  </li>
                 
                </ul>
              </li>
              @endif


              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">&nbsp;
                  <i class="fas fa-shopping-cart"></i>
                  <p>
                    &nbsp; Đặt hàng
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="{{route('listOrder')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  
                 
                </ul>
              </li>
              
           
              <li class="nav-header">EXAMPLES</li>
              <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                    Calendar
                    <span class="badge badge-info right">2</span>
                  </p>
                </a>
              </li>
             
          
             
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Extras
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/lockscreen.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lockscreen</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Legacy User Menu</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/language-menu.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Language Menu</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/404.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Error 404</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/500.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Error 500</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/pace.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pace</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/blank.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Blank Page</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="starter.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Starter Page</p>
                    </a>
                  </li>
                </ul>
              </li>
          
            
         
             
            
          
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    