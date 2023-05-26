@extends('layoutuser.user')
 
 
@section('content')
<nav id="menu" class="navbar">
    <div class="container">
        <div class="navbar-header"><span id="heading" class="visible-xs">Categories</span>
          <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Nhà xuất bản</a>                   
                    @foreach ($quanly_nxb as $key => $nxb)
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">
								<li><a href="{{URL::to('/nha-xuat-ban/'.$nxb->category_id)}}">{{$nxb->category_name}}</a></li>
                                                               
                            </ul>
                    @endforeach
                </div>
            </div>
        </li>
                    
            <li><a href="{{URL::to('/show_cart')}}">Giỏ hàng</a></li>
        <li><a href="{{URL::to('/contact')}}">Liên hệ</a></li>
                            
            </ul>
        </div>
    </div>
</nav>
<div id="page-content" class="single-page">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12">
                <ul class="breadcrumb">
                <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
                
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="heading"><h5>Sách khuyến mãi</h5></div>
               @foreach ($category_by_id_km as $key => $product)
               <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}" >
            
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" height="200" width="200" alt=""/>
                                   
                                    <p>{{$product->product_name}}</p>

                                    <div class="price" ><span style="text-decoration: line-through">{{number_format($product->product_price).' '.'VND'}}<span style="font-size: 14px;"></div>
                                        <div class="price" >{{number_format($product->product_price_km).' '.'VND'}}<span style="font-size: 14px;"></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  </a>
                </a>
                    @endforeach
                </div>
            </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="heading"><h5>Sản phẩm khác</h5></div>
                @foreach ($category_by_id as $key => $value)
                    
                <a href="{{URL::to('chi-tiet-san-pham/'.$value->product_id)}}" >
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" height="200" width="200" alt=""/>
                                   
                                    <p>{{$value->product_name}}</p>

                                    <div class="price" >{{number_format($value->product_price).' '.'VND'}}<span style="font-size: 14px;"></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  </a>
                        @endforeach
            </div>
        
        </div>
    
    </div>
</div>
@endsection




