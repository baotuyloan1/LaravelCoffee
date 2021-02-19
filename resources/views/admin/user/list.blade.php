    @extends('admin.layout.index')

    @section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                               <!-- /.col-lg-12 -->
                               @if (session('thongbao'))
                        <div class="alert alert-success">
                        {{session('thongbao')}}
                        </div>  
                   @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>UserName</th>
                                <th>Full Name</th>
                                <th>Number</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $u)
                            <tr class="odd gradeX" align="center">
                                <td>{{$u->id}}</td>
                                <td>{{$u->name}}</td>
                                <td>{{$u->fullName}}</td>
                                <td>{{$u->phoneNumber}}</td>
                                <td>{{$u->address}}</td>
                                <td>{{$u->emailAddress}}</td>
                                <td>{{$u->role->roleName}}</td>
                      
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/delete/{{$u->id}}" onclick="return xacnhanxoa('Bạn có muốn xóa user phẩm này')"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/edit/{{$u->id}}">Edit</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection