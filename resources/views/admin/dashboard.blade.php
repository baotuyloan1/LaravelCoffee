@extends('admin.layout.index')

@section('content')

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">TỔNG
                                <small> QUÁT</small>
                            </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                
                        <div class="row">

                        <div class="col-md-3" style="border-radius: 15px; background: 	#808080; color:white ; text-align: center"><h4>{{$count_User}} thành viên</h4></div>
                            
                        <div class="col-md-3" style="border-radius: 15px; background: 	#808080; color:white ; text-align: center"><h4>{{$count_Order}} đơn hàng</h4></div>
                            
                        <div class="col-md-3" style="border-radius: 15px; background: 	#808080; color:white ; text-align: center" > <h4>{{$count_Product}} sản phẩm</h4></div>
                                
                        <div class="col-md-3" style="border-radius: 15px; background: 	#808080; color:white ; text-align: center ; "><h4>{{$count_Review}} đánh giá</h4></div>
                                    </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->


           
            </div>
            <!-- /#page-wrapper -->

        @endsection    