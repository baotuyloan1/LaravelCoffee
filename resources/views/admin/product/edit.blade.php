@extends('admin.layout.index')

@section('content')
<style>
.img_curent{width: 150px} 
.img_detail {width: 200px; margin-bottom: 20px;}
.icon_del {position: relative;}
#insert {margin-top: 20px ; }
</style>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/product/edit/{{$product->id}}" name="frnEditProduct" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name ="_token" value="{{csrf_token()}}" />
                        
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Nhập tên sản phẩm" value="{{$product->name}}"/>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" placeholder="Nhập đơn giá" value="{{$product->price}}"/>
                            </div>
                            <div class="form-group">
                                <label>Promotion</label>
                                <textarea class="form-control" rows="3" name="promotion" placeholder="Nhập khuyến mãi (nếu có)" value="{{$product->promotion}}"></textarea>
                            </div>

                            <div class="form-group">
                                <label >Category</label>
                                <select class="form-control" name="category">
                                <option value="0">Chọn loại sản phẩm</option>
                                    @foreach($categories as $item)
                                    <option 
                                    
                                    @if ($item->id == $product->productCateId )
                                        {{"selected"}}
                                    @endif
                                    value="{{$item->id}}">{{$item->name}}</option>
                                   @endforeach 
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Weight</label>
                                <input class="form-control" name="weight" placeholder="Nhập khối lượng sản phẩm" value="{{$product->netWeight}}"/>
                            </div>

                            <div class="form-group">
                                <label>Roast</label>
                                <input class="form-control" name="roast" placeholder="Nhập cách rang" value="{{$product->roast}}"/>
                            </div>
                            <div class="form-group">
                                <label>Shelf Life</label>
                                <input class="form-control" name="shelfLife" placeholder="Nhập hạn sử dụng" value="{{$product->shelfLife}}" />
                            </div>
                            <div class="form-group">
                                <label>Particle Size</label>
                                <input class="form-control" name="particleSize" placeholder="Nhập kích thước hạt" value="{{$product->particleSize}}"/>
                            </div>
                            <div class="form-group">
                                <label >Producer</label>
                                <select class="form-control" name="producer">
                                <option value="0">Chọn nhà cung cấp</option>
                                    @foreach($producers as $item)
                                    <option
                                    @if ($item->id == $product->producerId)
                                    {{"selected"}}
                                    @endif
                                  value="{{$item->id}}">{{$item->name}}</option>
                                   @endforeach 
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image Curent</label>
                                <br>
                               <img src="{!!asset('img/products/'.$product->image) !!}" alt="" class="img_curent">
                            <input type="hidden" name="img_current" value="{{$product->image}}">

                            </div>

                            <div class="form-group">
                                <label>Images</label>
                               

<input type="file" name="fImages" multiple="multiple">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input class="form-control" name="quantity" placeholder="Nhập số lượng sản phẩm" type="number" min="1" value="{{$product->quantity}}"  />
                            </div>
                            <div class="form-group">
                                <label>Product Taste</label>
                                <textarea class="form-control" rows="3" name="taste" placeholder="Nhập mùi vị của sản phẩm">{{$product->taste}}</textarea>

                            </div>

                            <div class="form-group">
                                <label>Ingredient</label>
                                <textarea class="form-control" rows="3" name="ingredient" placeholder="Nhập thành phần có trong sản phẩm">{{$product->ingredient}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                <option value="1">Có</option>
                                 
                                 <option value="0">Không</option>
                                
                                </select>
                            </div>

                
                           
                            <button type="submit" class="btn btn-default">Chỉnh sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                      
                    </div>
                    <div class="col-md-1"></div>
<div class="col-md-4" >
    @foreach ($product_image as $key => $item)
    <div class="form-group" id="{!! $key !!}">
    <img src="{{ asset ('img/products/detail/'.$item->name) }}" alt="" class="img_detail" idHinh="{!! $item['id'] !!} " id="{!! $key !!}"/>
    <a href="javascript:void(0)" type="button" id="del_img_demo" class="btn btn-danger btn-circle icon_del">
        <i class="fa fa-times"></i>
    </a>
   
</div>

@endforeach
<button type="button" class="btn btn-primary" id="addImages">Add images</button>
 <div id="insert"></div>
    @for ($i = 1 ; $i <= 10 ; $i++)
    <div class="form-group">
        <label >Image Product Detail {{$i}}</label>
        <input type="file" name="fProductDetail[]">
    </div>
    @endfor
</div>
<form>
                    </div>
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bình luận
                            <small>Danh sách</small>
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
                                <th>Tên người dùng</th>
                                <th>Nội dung</th>
                                <th>Ngày đăng</th>
                                <th>Số sao review</th>
                        
                                <th>Delete</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product->comment as $cm)
                            <tr class="odd gradeX" align="center">
                                <td>{{$cm->id}}</td>
                                <td>{{$cm->user->fullName}}</td>
                                <td>{{$cm->content}}</td>
                                <td>{{$cm->created_at }}</td>
                            <td>{{$cm->star}}</td>
            
                      
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/delete/{{$cm->id}}/{{$product->id}}" onclick="return xacnhanxoa('Bạn có muốn xóa comment này')"> Delete</a></td>
                              
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

        <div>
            
        </div>

 
        @endsection    
