@extends('admin.layouts.base')
@section('pageTitle')
Category
@endsection
@section('content')
<!--Start Dashboard Content-->

<div class="card mt-3">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                {{session('success')}}
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="input-1">Name</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="input-2">Detail</label>
            <input type="text" class="form-control" name="detail" value="{{$data->detail}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-light px-5">Save</button>
            <a class="btn btn-light px-5" href="{{route('categoryadmin')}}">Back</a>
        </div>
    </form>
</div>
<!--End Row-->

<!--End Dashboard Content-->
@endsection
