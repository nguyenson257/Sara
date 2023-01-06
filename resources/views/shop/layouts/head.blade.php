<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 ameta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Sara | @yield('pageTitle')</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="{{ route('search') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="text" name="keywords_submit" style="padding-left: 70px" placeholder="Tìm kiếm sản phẩm...">
                            <button type="submit" name="search_items" class="btn btn-primary btn"><img src="{{asset('assets/img/core-img/search.png')}}" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-wrapper d-flex clearfix">