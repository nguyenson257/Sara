@extends('shop.layouts.base')
@section('pageTitle')
   Profile
@endsection
@section('content')
<div class="container" style="
    background-color: #F6F5F5;
    padding: 70px;
">
    <h2>Profile</h2>
    <br>
    <div class="card">
        <?php
        $msg = Session::get('success');
        if ($msg) {
            echo $msg;
            Session::put('success', null);
        }
        ?>
        <div class="card-body" style="padding: 50px">
            <?php
                $user = Session::get('user');
            ?>

            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $user->name }}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $user->email }}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                                <p class="mb-0">Phone number</p>
                            </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $user->phone_number }}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Date of birth</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $user->date_of_birth }}</p>
                </div>
            </div>
            <hr>

            <a href="{{route('edit_profile')}}" class="btn btn-primary">Update</a>

        </div>
    </div>
</div>

@endsection

