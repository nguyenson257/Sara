@extends('shop.layouts.base')
@extends('shop.layouts.script')
@section('pageTitle')
Chi tiết sản phẩm
@endsection
@section('content')
<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($product->images as $index => $image)
                            @if ($index == 0)
                            <li class="active" data-target="#product_details_slider" data-slide-to="{{$index}}" style="background-image: url({{asset('assets/product_images/'.$image->name)}});">
                            </li>
                            @else
                            <li data-target="#product_details_slider" data-slide-to="{{$index}}" style="background-image: url({{asset('assets/product_images/'.$image->name)}});">
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
                                <a class="gallery_img" href="{{asset('assets/product_images/'.$image->name)}}">
                                    <img class="d-block w-100" src="{{asset('assets/product_images/'.$image->name)}}">
                                </a>
                            </div>
                            @else
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{asset('assets/product_images/'.$image->name)}}">
                                    <img class="d-block w-100" src="{{asset('assets/product_images/'.$image->name)}}">
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
                        <a href="{{route('productDetail',$product->id)}}">
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
                        </div>
                        @if ($product->amount == 0)
                        <p class="avaibility"><i class="fa fa-circle" style="color: red"></i> Hết hàng({{$product->amount}})</p>
                        @else
                        <p class="avaibility"><i class="fa fa-circle"></i> Trong kho({{$product->amount}})</p>
                        @endif
                    </div>

                    <div class="short_overview my-5">
                        <p>{{$product->description}}</p>
                    </div>

                    <!-- Add to Cart Form -->
                    <form class="cart clearfix" id="addCart" >
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="image" value="{{$product->images[0]->name}}">
                        <input type="hidden" name="price" value="{{$product->price}}">
                        <div class="cart-btn d-flex mb-50">
                            <p>Số lượng</p>
                            <div class="quantity">
                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" disabled step="1" min="1" max="300" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        @if ($product->amount == 0)
                        <button type="submit" name="addtocart" class="btn amado-btn" disabled>Thêm vào giỏ hàng</button>
                        @else
                        <button type="button" name="addtocart" class="btn amado-btn btn-submit">Thêm vào giỏ hàng</button>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection