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
            <th scope="col">Payment Status </th>
            <th scope="col">Status </th>
            <th scope="col">Action </th>
            

        </tr>
    </thead>
    <tbody>
        @foreach($all_order as $all_order)
        <tr>
            <td>{{$all_order -> user_id}}</td>
            <td>{{$all_order -> address}}</td>
            <td>{{$all_order -> payment_status}}</td>
            <td>

                <div class="input-group input-group-static mb-4">
                    <select name="status" class="form-control select-status" data-action="{{ route('update-status', $all_order->id) }}">
                        @foreach (config('order.status') as $status)
                        <option value="{{ $status }}" {{ $status = $all_order->payment_status ? 'selected' : '' }}>{{ $status }}
                        </option>
                        @endforeach
                    </select>

            </td>
            <td>
         <a href="{{ route('view-order', $all_order->id) }}" class="active styling-edit" ui-toggle-class=""><p>View</p></i>
      </a>
      </td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection
@section('script')
    <script>
        $(function(){
            $(document).on("change",".select-status",function(e){
                e.preventDefault();
                let url=$(this).data("action");
                let data={
                    status:$(this).val()
                };
                $.post(url,data,res=>{
                    Swal.fire({
                        position:"top-end",
                        icon:"success",
                        title:"success",
                        showConfirmButton:false,
                        timer:1500,
                    })
                })
            });
        });
    </script>
@endsection