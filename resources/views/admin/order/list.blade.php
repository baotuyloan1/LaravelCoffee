    @extends('admin.layout.index')

    @section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Order
                            <small>List</small>
                        </h1>
                    </div>
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
                                <th>Name Customer</th>
                                <th>Id Account</th>
                                <th>Created at</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Total Price</th>
                                <th>Delivered</th>
                                <th>Note</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $item)
                                
                          
                            <tr class="odd gradeX" align="center">
                                <td>{{$item->id}}</td>
                                <td>{{$item->userInfo['fullName']}}</td>
                            <td>{{$item->accId}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->userInfo['address']}}</td>
                            <td>{{$item->userInfo['email']}}</td>
                            <td>{{$item->userInfo['phone']}}</td>
                            <td>{{$item->totalPrice}}</td>
                            <td>@if($item->delivered==0) {{"NO"}} @else {{"YES"}} @endif</td>
                            <td>{{$item->note}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/order/edit/{{$item->id}}"> Edit</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/order/delete/{{$item->id}}" onclick="return xacnhanxoa('Bạn có muốn xóa đơn hàng này')">Delete</a></td>
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