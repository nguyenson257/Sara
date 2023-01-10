@extends('admin.layouts.base')
@section('pageTitle')
    Dashboard
@endsection
@section('content')
    <!--Start Dashboard Content-->

    <div class="card mt-3">
        <div class="card-content">
            <div class="row row-group m-0">
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <h5 class="text-white mb-0">{{$orderCount}} <span class="float-right"><i class="fa fa-shopping-cart"></i></span>
                        </h5>
                        <div class="progress my-3" style="height:3px;">
                            <div class="progress-bar" style="width:100%"></div>
                        </div>
                        <p class="mb-0 text-white small-font">Total Orders </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <h5 class="text-white mb-0">{{number_format($revenueTotal, 0, '', ',')}} <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                            <div class="progress-bar" style="width:100%"></div>
                        </div>
                        <p class="mb-0 text-white small-font">Total Revenue </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <h5 class="text-white mb-0">{{$userCount}} <span class="float-right"><i class="fa fa-user"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                            <div class="progress-bar" style="width:100%"></div>
                        </div>
                        <p class="mb-0 text-white small-font">Users</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <h5 class="text-white mb-0">{{$productCount}} <span class="float-right"><i class="fa fa-book"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                            <div class="progress-bar" style="width:100%"></div>
                        </div>
                        <p class="mb-0 text-white small-font">Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End Dashboard Content-->
@endsection
