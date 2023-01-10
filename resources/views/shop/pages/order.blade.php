@extends('shop.layouts.base')
@extends('shop.layouts.script')
@section('pageTitle')
Đơn hàng
@endsection
@section('content')

<div class="cart-table-area section-padding-100">
    <?php $success_checkout = Session::get('success_checkout'); ?>
    @if($success_checkout)
    <div class="notify">
        <div class="d-flex">
            <div class="flex-shrink-0">
                <img src="{{asset('assets/img/core-img/success.png')}}" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <p><?php echo $success_checkout ;  
                Session::put('success_checkout', null);?></p>

            </div>
        </div>
    </div>
    @endif
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
                        <div>{{$order->created_at}} | </div>

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

                    <div class="d-flex mb-4 order_content row">
                        <div class="flex-shrink-0 col-3">
                            <a href="{{route('productDetail',$value->product_id)}}"><img
                                    src="{{asset('assets/product_images/'.$images[$id])}}" alt=""></a>
                        </div>
                        <div class="flex-grow-1 col-7">
                            {{$value->name}}
                            <div>x{{$value->quantity}}</div>
                        </div>
                        <div class="price col-2 ">
                            {{number_format($value->price, 0, '', ',')}}
                        </div>
                        <?php $tongtien += $value->quantity * $value->price; ?>
                    </div>

                    @endif
                    @endforeach
                    <div class="total">
                        <span class="border_order"></span>
                        <p>Tổng tiền: {{number_format($tongtien, 0, '', ',').' VND'}}</p>
                        <?php $tongtien = 0; ?>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection