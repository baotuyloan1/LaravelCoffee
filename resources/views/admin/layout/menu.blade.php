    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                        <a href="{{route('dashBoard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('listCategory')}}">List Category</a>
                                </li>
                                <li>
                                    <a href="{{route('addCategory')}}">Add Category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-cog fa-spin fa-1x fa-fw"></i> Producer<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('listProducer')}}">List Producer</a>
                                </li>
                                <li>
                                    <a href="{{route('addProducer')}}">Add Producer</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-cog fa-spin fa-1x fa-fw"></i> Order<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('listOrder')}}">List Order</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>




                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('listProduct')}}">List Product</a>
                                </li>
                                <li>
                                    <a href="admin/product/showAddPage">Add Product</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        @if (Auth::user()->role['roleName'] == "ADMIN")
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('listUser')}}">List User</a>
                                </li>
                                <li>
                                    <a href="admin/user/add">Add User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        @endif



                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->