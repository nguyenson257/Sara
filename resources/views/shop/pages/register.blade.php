<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 ameta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Sara | Đăng ký</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets/img/core-img/favicon.ico') }}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <?php
                                    $msg = Session::get('fail');
                                    if ($msg) {
                                        echo $msg;
                                        Session::put('fail', null);
                                    }

                                    ?>
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký</p>

                                    <form class="mx-1 mx-md-4" action="{{route('create_user')}}" method="post">
                                        @csrf
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw" style="align-self: end; padding-bottom: 13px;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example1c">Họ và tên</label>
                                                <input type="text" id="form3Example1c" class="form-control" name="name" />
                                                @error('name')
                                                <p style="color: red;">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw" style="align-self: end; padding-bottom: 13px;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example3c">Email</label>
                                                <input type="email" id="form3Example3c" class="form-control" name="email" />
                                                @error('email')
                                                <p style="color: red;">{{$message}}</p>
                                                @enderror
                                                <?php
                                                    $msg = Session::get('email_error');
                                                    if ($msg) {
                                                        echo '<p style="color: red;">'.$msg.'</p>';
                                                        Session::put('email_error', null);
                                                    }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw" style="align-self: end; padding-bottom: 13px;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4c">Mật khẩu</label>
                                                <input type="password" id="form3Example4c" class="form-control" name="password" />
                                                @error('password')
                                                <p style="color: red;">{{$message}}</p>
                                                @enderror
                                                <?php
                                                    $msg = Session::get('pass_error');
                                                    if ($msg) {
                                                        echo '<p style="color: red;">'.$msg.'</p>';
                                                        Session::put('pass_error', null);
                                                    }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw" style="align-self: end; padding-bottom: 13px;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4cd">Nhập lại mật khẩu</label>
                                                <input type="password" id="form3Example4cd" class="form-control" name="confirm_password" />
                                                @error('confirm_password')
                                                <p style="color: red;">{{$message}}</p>
                                                @enderror
                                                <?php
                                                $msg = Session::get('confirm_pass');
                                                if ($msg) {
                                                    echo '<p style="color: red;">'.$msg.'</p>';
                                                    Session::put('confirm_pass', null);
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Đăng ký</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="{{ asset('assets/img/bg-img/img_register.png') }}" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
