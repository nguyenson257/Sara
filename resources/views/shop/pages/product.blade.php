@extends('shop.layouts.base')
@section('pageTitle')
Product Detail
@endsection
@section('content')
<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-50">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                        <li class="breadcrumb-item"><a href="#">Chairs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">white modern chair</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($product->images as $index => $image)
                            @if ($index == 0)
                            <li class="active" data-target="#product_details_slider" data-slide-to="{{$index}}" style="background-image: url({{asset('assets/product_images/'.$image->name.'.jpeg')}});">
                            </li>
                            @else
                            <li data-target="#product_details_slider" data-slide-to="{{$index}}" style="background-image: url({{asset('assets/product_images/'.$image->name.'.jpeg')}});">
                            </li>
                            @endif
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            
                            @foreach ($product->images as $image)
                            
                            @endforeach
                            @foreach ($product->images as $index => $image)
                            @if ($index == 0)
                            <div class="carousel-item active">
                                <a class="gallery_img" href="{{asset('assets/product_images/'.$image->name.'.jpeg')}}">
                                    <img class="d-block w-100" src="{{asset('assets/product_images/'.$image->name.'.jpeg')}}">
                                </a>
                            </div>
                            @else
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{asset('assets/product_images/'.$image->name.'.jpeg')}}">
                                    <img class="d-block w-100" src="{{asset('assets/product_images/'.$image->name.'.jpeg')}}">
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price">{{number_format($product->price, 0, '', ',')}}</p>
                        <a href="product-details.html">
                            <h6>{{$product->name}}</h6>
                        </a>
                        <!-- Ratings & Review -->
                        <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                                <a href="#">Write A Review</a>
                            </div>
                        </div>
                        <!-- Avaiable -->
                        <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                    </div>

                    <div class="short_overview my-5">
                        <p>{{$product->description}}</p>
                    </div>

                    <!-- Add to Cart Form -->
                    <form class="cart clearfix" method="post">
                        <div class="cart-btn d-flex mb-50">
                            <p>Qty</p>
                            <div class="quantity">
                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection