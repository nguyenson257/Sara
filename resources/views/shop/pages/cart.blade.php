@extends('shop.layouts.base')
@extends('shop.layouts.script')
@section('pageTitle')
Cart
@endsection
@section('content')
<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Shopping Cart</h2>
                </div>

                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $cartProducts = Session::get('cart');
                                $subTotal = 0;
                            ?>
                            @if ( !isset($cartProducts) || empty($cartProducts))
                            <tr>
                                <h2>Không có sản phẩm nào trong giỏ hàng</h2>
                            </tr>
                            @else
                            @foreach ($cartProducts as $index => $cartProduct)
                            <?php
                                $subTotal += ($cartProduct['product_price'] * $cartProduct['product_qty']);
                            ?>
                            <tr class="cartpage">
                                <td class="cart_product_img">
                                    <a href="#"><img src="{{asset('assets/product_images/'.$cartProduct['product_image'])}}"></a>
                                </td>
                                <td class="cart_product_desc">
                                    <h5>{{$cartProduct['product_name']}}</h5>
                                </td>
                                <td class="price">
                                    <span>{{number_format($cartProduct['product_price'], 0, '', ',')}}</span>
                                </td>
                                <td class="qty">
                                    <div class="qty-btn d-flex">
                                        <div class="quantity">
                                            <input type="hidden" class="product_id" value="{{$cartProduct['product_id']}}">
                                            <span class="qty-minus changeQty" onclick="var effect = document.getElementById('qty{{$cartProduct['product_id']}}'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" class="qty-text qtyinput" id="qty{{$cartProduct['product_id']}}" step="1" min="0" max="300" name="quantity" disabled value="{{$cartProduct['product_qty']}}">
                                            <span class="qty-plus changeQty" onclick="var effect = document.getElementById('qty{{$cartProduct['product_id']}}'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-4" id="totalCall">
                <div class="cart-summary totalLoad">
                    <h5>Cart Total</h5>
                    <ul class="summary-table">
                        <li><span>subtotal:</span> <span id="subTotal">{{number_format($subTotal, 0, '', ',').' VND'}}</span></li>
                        <li><span>delivery:</span> <span>Free</span></li>
                        <li><span>total:</span><span  id="subTotal">{{number_format($subTotal, 0, '', ',').' VND'}}</span></li>
                    </ul>
                    <div class="cart-btn mt-100">
                        <a href="cart.html" class="btn amado-btn w-100">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 