@extends('shop.layouts.base')
@extends('shop.layouts.script')
@section('pageTitle')
Trang chủ
@endsection
@section('content')
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">

        <!-- Single Catagory -->
       
        @foreach($products as $product)
        <div class="single-products-catagory clearfix">
            <a href="{{route('category', $product['product']->category_id)}}">
                <img src="{{asset('assets/product_images/'.$product['image'][0]->name)}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>Chỉ từ {{number_format($product['product']->price, 0, '', ',')}}</p>
                    <h4>{{$product['categoryName']}}</h4>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>  
@endsection