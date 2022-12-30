</div>
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="{{route('home')}}"><img src="{{asset('assets/img/core-img/logo.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                            <div class="collapse navbar-collapse" id="footerNavContent">
                                <ul class="navbar-nav ml-auto">
                                    @if (Route::currentRouteName() == 'home')
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('home')}}">Home</a>
                                    </li>
                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home')}}">Home</a>
                                    </li>
                                    @endif
                                    @if (Route::currentRouteName() == 'category' || Route::currentRouteName() == 'productDetail')
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('category', 1)}}">Shop</a>
                                    </li>
                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('category', 1)}}">Shop</a>
                                    </li>
                                    @endif
                                    @if (Route::currentRouteName() == 'showCard')
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('showCard')}}">Cart</a>
                                    </li>
                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('showCard')}}">Cart</a>
                                    </li>
                                    @endif
                                    @if (Route::currentRouteName() == 'checkout')
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Checkout</a>
                                    </li>
                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Checkout</a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->
@yield('script')
</body> 

</html>