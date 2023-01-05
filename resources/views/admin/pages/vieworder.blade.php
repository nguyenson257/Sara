@extends('admin.layouts.base')
@section('pageTitle')
Dashboard
@endsection
@section('content')


@foreach ($id as $key => $iduser)

<form >

    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleFormControlInput1">User ID</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$iduser->user_id}}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$iduser->address}}">

    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Status</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$iduser->status}}">

    </div>
    

</form>
@endforeach


@endsection