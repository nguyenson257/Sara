@extends('shop.layouts.base')
@extends('shop.layouts.script')
@section('pageTitle')
    Chỉnh sửa thông tin
@endsection
@section('content')
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">

            <div class="container" style="
    background-color: #F6F5F5;
    padding: 70px;
">
                <h2>Thông tin tài khoản</h2>
                <br>

                <div class="card">
                    <div class="card-body" style="padding: 40px">
                        <?php
                        $msg = Session::get('fail');
                        if ($msg) {
                            echo '<p style="color: red;">'.$msg.'</p>';
                            Session::put('fail', null);
                        }
                        ?>

                        <?php
                        $user = Session::get('user');
                        ?>
                        <form action="{{route('edit_profile')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Họ và tên</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="date">Ngày sinh</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ $user->date_of_birth }}" >
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone_number }}" >
                            </div>
                            <br>
                            <button type="submit" id="btn-edit" class="btn btn-primary">Lưu</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

