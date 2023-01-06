@extends('admin.layouts.base')
@section('pageTitle')
Dashboard
@endsection
@section('content')


@foreach ($id as $key => $iduser)


<form method="post"  action="{{URL::to('/update-status/'.$iduser->id)}}}">

    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleFormControlInput1">User ID</label>
        <input type="text" class="form-control"  value="{{$iduser->user_id}}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Address</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$iduser->address}}">

    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Status</label>
        <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$iduser->status}}">

    </div>
    <div class="form-group">
    <button class="btn btn-primary">Update</button>
    </div>

</form>
<a href="{{route('print-order',$iduser->id)}}">In đơn hàng</a>

@endforeach


@endsection