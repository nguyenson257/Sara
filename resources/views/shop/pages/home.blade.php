@extends('shop.layouts.base')
@section('pageTitle')
Home
@endsection
@section('content')
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">

        <!-- Single Catagory -->
        @foreach($products as $product)
        <div class="single-products-catagory clearfix">
            <a href="{{route('category', $product['product']->category_id)}}">
                <img src="{{asset('assets/img/bg-img/1.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>Chỉ từ {{$product['product']->price}}</p>
                    <h4>{{$product['namecat']}}</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>  
@endsection