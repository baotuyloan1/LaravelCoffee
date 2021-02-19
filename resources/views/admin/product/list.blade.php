@extends('admin.layout.index')

@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
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
                                <th>Name</th>
                                <th>Price</th>
                                <th>Promotion</th>
                                <th>Shelf Life</th>
                                
                                <TH>Weight</TH>
                                <th>Roast</th>
                                <th>Quantity</th>
                                <th>Taste</th>
                                <th>Ingredient</th>
                                <th>Sold</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($products as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}
                                   
                                    <img src="{!! URL::to('img/products/'.$item->image) !!}" alt="" width="50%" >

                                  
                                </td>
                                <td>{{$item->price}}</td>
                            <td>{{$item->promotion}}</td>
                                <td>{{$item->shelfLife}}</td>
                               
                                <td>{{$item->netWeight}}</td>
                                <td>{{$item->roast}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->taste}}</td>
                                <td>{{$item->ingredient}}</td>
                                <td>{{$item->sold}}</td>
                                <td>{{$item->status}}</td>
                           
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/delete/{{$item->id}}" onclick="return xacnhanxoa('Bạn có muốn xóa sản phẩm này')"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/showEditPage/{{$item->id}}">Edit</a></td>
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