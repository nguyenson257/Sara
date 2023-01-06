@extends('shop.layouts.base')
@section('pageTitle')
Checkout
@endsection
@section('content')
<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <form action="{{route('payment')}}" method="post">
            @csrf
            <div class="row">
                <?php
                    $cartProducts = Session::get('cart');
                    $subTotal = 0;
                ?>
                <!-- <pre>
                    <?php print_r($cartProducts)?>
                <pre> -->
                @if ( !isset($cartProducts) || empty($cartProducts))
                <tr>
                    <div class="col-12">
                        <p class="cart_empty">Không có sản phẩm nào trong giỏ hàng</p>
                    </div>
                </tr>
                @else
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">
                        <div class="cart-title">
                            <h2>Thanh toán</h2>
                        </div>

                        @foreach ($infoUser as $index => $infoUser)
                        <div class="wrapper">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" id="first_name" value="{{$infoUser->name}}"
                                        placeholder="Họ tên" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Email"
                                        value="{{$infoUser->email}}" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control mb-3" name="street_address"
                                        placeholder="Địa chỉ" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" name="city" placeholder="Thành phố" value=""
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="zipCode" placeholder="Zip Code" value=""
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="number" class="form-control" id="phone_number" min="0"
                                        placeholder="Số điện thoại" value="{{$infoUser->phone_number}}" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10"
                                        placeholder="Để lại nhận xét về đơn hàng của bạn"></textarea>
                                </div>

                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Gửi đến một địa chỉ
                                            khác</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                @foreach ($cartProducts as $index => $cartProduct)
                <?php
                    $subTotal += ($cartProduct['product_price'] * $cartProduct['product_qty']);
                    // echo $cartProduct['product_price']. '</br>';
                    // echo $subTotal;
                ?>
                @endforeach

                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Tống số</h5>
                        <ul class="summary-table">
                            <li><span>Số tiền:</span> <span>{{number_format($subTotal, 0, '', ',').' VND'}}</span></li>
                            <li><span>Vận chuyển:</span> <span>Free</span></li>
                            <li><span>Tổng số tiền:</span> <span>{{number_format($subTotal, 0, '', ',').' VND'}}</span>
                            </li>
                        </ul>

                        <div class="payment-method">
                            <!-- Cash on delivery -->
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input class="form-check-input" type="radio" name="redirect" id="cod" value="1" checked>
                                <label class="" for="cod">
                                    Thanh toán khi nhận hàng
                                </label>
                                <!-- <input type="checkbox" class="custom-control-input" id="cod" checked>
                            <label class="custom-control-label" for="cod">Thanh toán khi nhận hàng</label> -->
                            </div>
                            <!-- Paypal -->
                            <input type="hidden" name="total" value="{{$subTotal}}">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input class="form-check-input" type="radio" name="redirect" id="paypal" value="2">
                                <label class="" for="paypal">
                                    Thanh toán online <img class="ml-15"
                                        src="{{asset('assets/img/core-img/paypal.png')}}" alt="">
                                </label>
                                <!-- <input type="checkbox" class="custom-control-input" id="paypal">
                            <label class="custom-control-label" for="paypal">Thanh toán online <img class="ml-15"
                                    src="{{asset('assets/img/core-img/paypal.png')}}" alt=""></label> -->
                            </div>
                        </div>
                        <div class="cart-btn">
                            <button type="submit" class="btn amado-btn w-100">Thanh
                                toán</a></button>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection