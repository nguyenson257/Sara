@extends('shop.layouts.base')
@extends('shop.layouts.script')
@section('pageTitle')
Sản phẩm
@endsection
@section('content')
<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Danh mục sản phẩm</h6>
        <!--  Catagories  -->
        {{-- hiển thị danh mục sản phẩm --}}
            <div class="catagories-menu">
                <ul>
                    @foreach ($categories as $category)
                    @if(count($products)!=0 && $category->id == $products[0]->category_id) 
                    <li class="active"><a href="{{route('category', $category->id)}}">{{ $category->name }}</a></li>
                    @else
                    <li><a href="{{route('category', $category->id)}}">{{ $category->name }}</a></li>
                    @endif
                    @endforeach
                </ul>
        </div>
    </div>
</div>

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                    <!-- Total Products -->
                    <div class="total-products">
                        <div class="view d-flex">
                            <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Product Area -->
            {{-- hiển thị sản phẩm theo danh mục --}}
            @if (count($products )!= 0)          
                @foreach($products as $product)
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('assets/product_images/'.$product->images[0]->name)}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('assets/product_images/'.$product->images[1]->name)}}" alt="">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data col-10">
                                    <div class="line"></div>
                                    <p class="product-price">{{number_format($product->price, 0, '', ',')}}</p>
                                    <a href="{{route('productDetail',$product->id)}}">
                                        <h6>{{$product->name}}</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right col-2">
                                    <div class="cart">
                                        <a href="{{route('productDetail',$product->id)}}" data-toggle="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><img src="{{asset('assets/img/core-img/cart.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach    
            @else
                <p style="padding-left:5rem; font-size: 17px">Không tìm thấy kết quả.</p>              
            @endif        
        </div>
    </div>
</div>
@endsection