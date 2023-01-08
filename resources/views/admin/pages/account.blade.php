@extends('admin.layouts.base')
@section('pageTitle')
Dashboard
@endsection
@section('content')
<!--Start Dashboard Content-->
<table class="table table-bordered">
  <thead>
    <tr>
<form class="search-bar" action="{{route('searchname')}}" method="post">
  {{csrf_field()}}
  <input type="search" name="ten" id="keywords" class="form-control" placeholder="Enter keywords" value="">
  <div id="search-ajax"></div>
  <a href="javascript:void();"><i class="icon-magnifier"></i></a>
  <br>
  <button class="btn btn-primary">Search</button>
</form>
<br><br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Role</th>
>>>>>>> Stashed changes
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Date of birth</th>
      <th scope="col">PHone Number</th>

    </tr>
  </thead>

  <tbody>
  @foreach ($all_user as $key => $all_user)
    <tr>
      <td>{{$all_user-> role_id}}</td>
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
<script>
  $(document).ready(function() {
    $(document).on('keyup', '#ten', function() {
      var keyword = $(this).val();
      $.ajax({
        type: "get",
        url: "/search",
        data: {
          keyword: keyword
        },
        dataType: "json",
        success: function(response) {
          $('#list').html(response);
        }
      })
    })
  });
</script>
<!--End Row-->

<!--End Dashboard Content-->
@endsection