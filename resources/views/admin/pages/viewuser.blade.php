@extends('admin.layouts.base')
@section('pageTitle')
Dashboard
@endsection
@section('content')


@foreach ($id as $key => $iduser)

<form >

    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$iduser->email}}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Name</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$iduser->name}}">

    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Date of Birth</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$iduser->date_of_birth}}">

    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Phone number</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$iduser->phone_number}}">

    </div>

</form>
@endforeach


@endsection