<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 ameta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Sara | Đăng nhập</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets/img/core-img/favicon.ico') }}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-9 col-lg-6 col-xl-5">
                                    <img src="{{ asset('assets/img/bg-img/img_login.png') }}"
                                        class="img-fluid" alt="Sample image">
                                </div>
                                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                    <form action="{{route('check_login')}}" method="post">
                                        @csrf
                                        <div
                                            class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                            <p class="lead fw-normal mb-0 me-3">Đăng nhập với</p>
                                            <a href="{{route('login_facebook')}}" class="btn btn-primary btn-floating mx-1">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>

                                            <a href="{{route('login_google')}}" class="btn btn-primary btn-floating mx-1">
                                                <i class="fab fa-google"></i>
                                            </a>
                                        </div>

                                        <div class="divider d-flex align-items-center my-4">
                                            <p class="text-center fw-bold mx-3 mb-0">Hoặc</p>
                                        </div>

                                        <?php
                                        $msg = Session::get('fail');
                                        if ($msg) {
                                            echo '<p style="color: red;">'.$msg.'</p>';
                                            Session::put('fail', null);
                                        }
                                        ?>

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example3" name="email"
                                                class="form-control form-control-lg"
                                                placeholder="Nhập địa chỉ Email" />
                                            <label class="form-label" for="form3Example3">Email</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-3">
                                            <input type="password" id="form3Example4" name="password"
                                                class="form-control form-control-lg" placeholder="Nhập mật khẩu" />
                                            <label class="form-label" for="form3Example4">Mật khẩu</label>
                                        </div>

                                        <div class="text-center text-lg-start mt-4 pt-2">
                                            <button type="submit" class="btn btn-primary btn-lg"
                                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng nhập</button>
                                            <p class="small fw-bold mt-2 pt-1 mb-0">Chưa có tài khoản? <a
                                                    href="{{route('register')}}" class="link-danger">Đăng ký</a></p>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
