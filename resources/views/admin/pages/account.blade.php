@extends('admin.layouts.base')
@section('pageTitle')
Dashboard
@endsection
@section('content')
<!--Start Dashboard Content-->
<form class="search-bar" action="{{route('searchname')}}">
  {{csrf_field()}}
  <input type="search" name="search" id="keywords" class="form-control" placeholder="Enter keywords" value="">
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
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Date of birth</th>
      <th scope="col">PHone Number</th>

    </tr>
  </thead>

  <tbody id="list">
    @foreach ($all_user as $key => $all_user)
    <tr>
    <td>{{$all_user-> role_id}}</td>
      <td>{{$all_user-> email}}</td>
      <td>{{$all_user-> name}}</td>
      <td>{{$all_user-> date_of_birth}}</td>
      <td>{{$all_user-> phone_number}}</td>
      <td>
        <a href="{{URL::to('/view_profile/'.$all_user->id)}}" class="active styling-edit" ui-toggle-class="">
          <p>View</p></i>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!--End Row-->
<!-- <script type="text/javascript">
  $('#keyword').keyup(function() {
    var query = $(this).val();
    if (query != '') {
      var _token = $('input[name=_token]').val();
      $.ajax({
        url: "([url('/search')])",
        method: "POST",
        data: {
          query: query,
          _token: _token
        },
        success: function(data) {
          $('search-ajax').fadeIn();
          $('search-ajax').html(data);
        }
      });
    } else {
      $('search-ajax').fadeOut();
    }
  });
  $(document).on('click', 'li', function() {
    $('#keyword').val($(this).text());
    $('search-ajax').fadeOut();
  });
</script> -->

<!--End Dashboard Content-->
@endsection