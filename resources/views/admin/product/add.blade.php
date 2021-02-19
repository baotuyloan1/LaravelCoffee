@extends('admin.layout.index')

@section('content')


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}} <br>

                            @endforeach
                        </div>
                    @endif

                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                    @endif
                        <form action="admin/product/add" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name ="_token" value="{{csrf_token()}}" />
                        
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" placeholder="Nhập đơn giá" />
                            </div>
                            <div class="form-group">
                                <label>Promotion</label>
                                <textarea class="form-control" rows="3" name="promotion" placeholder="Nhập khuyến mãi (nếu có)"></textarea>
                            </div>

                            <div class="form-group">
                                <label >Category</label>
                                <select class="form-control" name="category">
                                <option value="0">Chọn loại sản phẩm</option>
                                    @foreach($categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                   @endforeach 
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Weight</label>
                                <input class="form-control" name="weight" placeholder="Nhập khối lượng sản phẩm" />
                            </div>

                            <div class="form-group">
                                <label>Roast</label>
                                <input class="form-control" name="roast" placeholder="Nhập cách rang" />
                            </div>
                            <div class="form-group">
                                <label>Shelf Life</label>
                                <input class="form-control" name="shelfLife" placeholder="Nhập hạn sử dụng" />
                            </div>
                            <div class="form-group">
                                <label>Particle Size</label>
                                <input class="form-control" name="particleSize" placeholder="Nhập kích thước hạt" />
                            </div>
                            <div class="form-group">
                                <label >Producer</label>
                                <select class="form-control" name="producer">
                                <option value="0">Chọn nhà cung cấp</option>
                                    @foreach($producers as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                   @endforeach 
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                               

<input type="file" name="image" multiple="multiple">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input class="form-control" name="quantity" placeholder="Nhập số lượng sản phẩm" type="number" min="1"  />
                            </div>
                            <div class="form-group">
                                <label>Product Taste</label>
                                <textarea class="form-control" rows="3" name="taste" placeholder="Nhập mùi vị của sản phẩm"></textarea>

                            </div>

                            <div class="form-group">
                                <label>Ingredient</label>
                                <textarea class="form-control" rows="3" name="ingredient" placeholder="Nhập thành phần có trong sản phẩm"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                <option value="1">Có</option>
                                 
                                 <option value="0">Không</option>
                                
                                </select>
                            </div>

                
                           
                            <button type="submit" class="btn btn-default">Product Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                      
                    </div>
                    <div class="col-md-1"></div>
<div class="col-md-4" >
    @for ($i = 1 ; $i <= 10 ; $i++)
    <div class="form-group">
        <label >Image Product Detail {{$i}}</label>
        <input type="file" name="fProductDetail[]">
    </div>
    @endfor
</div>
<form>
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->
            
        </div>
        <!-- /#page-wrapper -->


        @endsection    

  