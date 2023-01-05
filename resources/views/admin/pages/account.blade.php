@extends('admin.layouts.base')
@section('pageTitle')
Dashboard
@endsection
@section('content')
<!--Start Dashboard Content-->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Date of birth</th>
      <th scope="col">PHone Number</th>

    </tr>
  </thead>

  <tbody>
  @foreach ($all_user as $key => $all_user)
    <tr>
      <td>{{$all_user-> email}}</td>
      <td>{{$all_user-> name}}</td>
      <td>{{$all_user-> date_of_birth}}</td>
      <td>{{$all_user-> phone_number}}</td>
      <td>
      <a href="{{URL::to('/view_profile/'.$all_user->id)}}" class="active styling-edit" ui-toggle-class=""><p>View</p></i>
      </a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
<!--End Row-->

<!--End Dashboard Content-->
@endsection