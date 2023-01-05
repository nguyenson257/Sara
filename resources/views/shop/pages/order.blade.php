@extends('shop.layouts.base')
@section('pageTitle')
Checkout
@endsection
@section('content')
<!-- <div class="notify">
    <?php
    $success_checkout = Session::get('success_checkout');
    echo $success_checkout;
    ?>
</div> -->
<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="cart-title mt-50">
                    <h2>Lịch sử đơn hàng</h2>
                </div>
                <?php $tongtien = 0; ?>

                @foreach($order as $key => $order)

                <div class="cart_order">
                    <div class="d-flex justify-content-end">
                        @if($order->status == 0)
                        <div> Đơn hàng chưa giao </div>
                        @else
                        <div> Đơn hàng đã giao </div>
                        @endif

                        <div>|</div>
                        @if($order->payment_id == 1)
                        <div> Thanh toán khi nhận hàng</div>
                        @else
                        <div> Đã thanh toán online</div>
                        @endif
                    </div>
                    <span class="border_order"></span>
                    @foreach($order_products as $id => $value)
                    @if($value->order_id == $order->id)
                    <div class="d-flex mb-4 order_content">
                        <div class="flex-shrink-0">
                            <img src="{{asset('assets/product_images/'.$images[$id])}}" alt="">
                        </div>
                        <div class="flex-grow-1 order_name">
                            {{$value->name}}
                            <div>x{{$value->quantity}}</div>
                        </div>
                        <div class="price">
                            {{number_format($value->price, 0, '', ',').' VND'}}
                        </div>
                    </div>
                    <?php $tongtien += $value->quantity * $value->price; ?>
                    @endif
                    @endforeach
                    <div class="total">
                        <span class="border_order"></span>
                        <p>Tổng tiền: {{number_format($tongtien, 0, '', ',').' VND'}}</p>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection