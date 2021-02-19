<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
    <base href="{{asset('')}}">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:700);

.box {
  position: relative;

  background: #fff;
  box-shadow: 0 0 15px rgba(0,0,0,.1);
}

/* common */
.ribbon {
  width: 150px;
  height: 150px;
  overflow: hidden;
  position: absolute;
}
.ribbon::before,
.ribbon::after {
  position: absolute;
  z-index: -1;
  content: '';
  display: block;
  border: 5px solid #2980b9;
}
.ribbon span {
  position: absolute;
  display: block;
  width: 225px;
  padding: 15px 0;
  background-color: #3498db;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
  color: #fff;
  font: 700 18px/1 'Lato', sans-serif;
  text-shadow: 0 1px 1px rgba(0,0,0,.2);
  text-transform: uppercase;
  text-align: center;
}

/* top left*/
.ribbon-top-left {
  top: -10px;
  left: -10px;
}
.ribbon-top-left::before,
.ribbon-top-left::after {
  border-top-color: transparent;
  border-left-color: transparent;
}
.ribbon-top-left::before {
  top: 0;
  right: 0;
}
.ribbon-top-left::after {
  bottom: 0;
  left: 0;
}
.ribbon-top-left span {
  right: -25px;
  top: 30px;
  transform: rotate(-45deg);
}

/* top right*/
.ribbon-top-right {
  top: -10px;
  right: -10px;
}
.ribbon-top-right::before,
.ribbon-top-right::after {
  border-top-color: transparent;
  border-right-color: transparent;
}
.ribbon-top-right::before {
  top: 0;
  left: 0;
}
.ribbon-top-right::after {
  bottom: 0;
  right: 0;
}
.ribbon-top-right span {
  left: -25px;
  top: 30px;
  transform: rotate(45deg);
}

/* bottom left*/
.ribbon-bottom-left {
  bottom: -10px;
  left: -10px;
}
.ribbon-bottom-left::before,
.ribbon-bottom-left::after {
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.ribbon-bottom-left::before {
  bottom: 0;
  right: 0;
}
.ribbon-bottom-left::after {
  top: 0;
  left: 0;
}
.ribbon-bottom-left span {
  right: -25px;
  bottom: 30px;
  transform: rotate(225deg);
}

/* bottom right*/
.ribbon-bottom-right {
  bottom: -10px;
  right: -10px;
}
.ribbon-bottom-right::before,
.ribbon-bottom-right::after {
  border-bottom-color: transparent;
  border-right-color: transparent;
}
.ribbon-bottom-right::before {
  bottom: 0;
  left: 0;
}
.ribbon-bottom-right::after {
  top: 0;
  right: 0;
}
.ribbon-bottom-right span {
  left: -25px;
  bottom: 30px;
  transform: rotate(-225deg);
}
    </style>
  
  

    @include('include.header-css')
</head>

<body>
    @include('include.top-menu')


    @include('include.banner')




    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>New<span>Coffee</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">  
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">

                                @if ($products != null )
                                @foreach ($products as $product)

                                


                                <div class="col-lg-4 col-sm-6">
                                    <div class="single_product_item">
                                        <a href="{{route('viewDetail',$product->id)}}">
                                          

                                            <div class="box">
                                                    <img src="{!! URL::to('img/products/'.$product->image) !!}"  alt="">
                                                    @if ($product->promotion != 0 && $product->promotion < $product->price)
                                                    <div class="ribbon ribbon-top-right"><span>Sale</span></div>
                                                  @endif
                                                  </div>
                                                    

                                          



                                         
                                        </a>
                                        <div class="single_product_text">

                                            <h4>{{$product->name}}</h4>
                                            @if ($product->promotion ==0 || $product->promotion >= $product->price)
                                           <h3>{{number_format($product->price, 3).' VNĐ'}} </h3>
                                           @else 
                                            <h3><strike style="color:red">  {{number_format($product->price, 3).' VNĐ'}}</strike> <span> &nbsp     {{number_format($product->promotion, 3).' VNĐ'}} </span></h3>
                                            @endif
                                          
                                          @if ($product->quantity<= 0)  
                                           <h3 style="color:red">Hết hàng</h3>
                                       @else
                                            <a href="{{route('themvaogiohang',$product->id)}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>

                                            @endif
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->










    <!-- awesome_shop start-->
    <!-- <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="img/offer_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Weekly Sale on
                            60% Off All Products</h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="gallery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href="img/g1.jpg" class="img-pop-home">
                        <img class="img-fluid" src="img/g1.jpg" alt="">
                    </a>
                    <a href="img/g2.jpg" class="img-pop-home">
                        <img class="img-fluid" src="img/g2.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <a href="img/g3.jpg" class="img-pop-home">
                        <img class="img-fluid" src="img/g3.jpg" alt="">
                    </a>
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="img/g4.jpg" class="img-pop-home">
                                <img class="img-fluid" src="img/g4.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="img/g5.jpg" class="img-pop-home">
                                <img class="img-fluid" src="img/g5.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End gallery Area -->
    <!-- awesome_shop part start-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Sale Coffee <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">

                            @if ($bestSeller != null )
                            @foreach ($bestSeller as $item)
                    
                            <div class="single_product_item">
                                    <a href="{{route('viewDetail',$item->id)}}">
                                <div class="box">
                                 
                            <img src="{!! URL::to('img/products/'.$item->image) !!}" alt="">
                     
                            @if ($item->promotion != 0 && $item->promotion < $item->price)
                            <div class="ribbon ribbon-top-right"><span>Sale</span></div>
                          @endif
    
                          </div>
                        </a>
                                <div class="single_product_text">
                                    <h4>{{$item->name}}</h4>
                                    @if ($item->promotion ==0 || $item->promotion >= $item->price)
                                    <h3>{{$item->price}} VNĐ </h3>
                                    @else 
                                     <h3><strike style="color:red">  {{$item->price}} VNĐ </strike> <span> &nbsp      {{$item->promotion}} VNĐ</span></h3>
                                     @endif
                                   
                                   @if ($item->quantity<= 0)  
                                    <h3 style="color:red">Hết hàng</h3>
                                @else
                                     <a href="{{route('themvaogiohang',$item->id)}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>

                                     @endif
                                   
                                </div>
                                
                           
                            </div>

                            @endforeach
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->


    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 single-blog">
                    <img class="img-fluid" src="img/b3.jpg" alt="">
                    <ul class="post-tags">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Life Style</a></li>
                    </ul>
                    <a href="#">
                        <h4>Portable latest Fashion for young women</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                    <p class="post-date">
                        31st January, 2018
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 single-blog">
                    <img class="img-fluid" src="img/b2.jpg" alt="">
                    <ul class="post-tags">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Life Style</a></li>
                    </ul>
                    <a href="#">
                        <h4>Portable latest Fashion for young women</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                    </p>
                    <p class="post-date">
                        31st January, 2018
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog Area -->

    <!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->



    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_5.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->


   




  @include('include.footer-script') 
</body>

</html>