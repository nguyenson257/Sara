@extends('admin.layouts.base')
@section('pageTitle')
Dashboard
@endsection
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">User Id</th>
            <th scope="col">Address</th>
            <th scope="col">Status </th>
            <th scope="col">Create at </th>
            <th scope="col">Action </th>
        </tr>
    </thead>
    <tbody>
        @foreach($all_order as $all_order)
        <tr>
            <td>{{$all_order -> user_id}}</td>
            <td>{{$all_order -> address}}</td>
            <td><span class="text-ellipsis">
              <?php
              if($all_order -> status ==1){
              ?>
              <p>Đã hoàn thành</p>
              <?php 
              }else{ 
              
              ?><p>Chưa hoàn thành</p>
              <?php
              }
              ?>
              
            </span></td>
            <td>{{$all_order -> created_at}}</td>
            <td>
               <a href="{{ route('view-order', $all_order->id) }}" class="active styling-edit" ui-toggle-class=""><p>View</p></i>
            </a>
               <a onclick="return confirm('Are you sure to delete?')" href="{{route('delete_order',$all_order->id)}}" class="active styling-edit" ui-toggle-class=""><p>Delete</p></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
