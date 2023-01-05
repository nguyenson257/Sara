@extends('admin.layouts.base')
@section('pageTitle')
    Category
@endsection
@section('content')
    <!--Start Dashboard Content-->

    <div class="card mt-3">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $value)
                    <tr>
                        <th scope="row">{{$value->id}}</th>
                        <td>{{$value->name}}</td>
                        <td>{{$value->detail}}</td>
                        <td>
                            <a href="{{route('categoryGetedit',['id'=>$value->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                            &nbsp
                            <a href="{{route('categorydelete',['id'=>$value->id])}}"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>    
                <a href="{{route('categoryGetadd')}}" class="btn btn-light px-5"><i class="fa fa-plus-square" aria-hidden="true"></i> ADD</a>
                <br><br>
                {{$data->links('pagination::bootstrap-4')}}
            </div>
    </div>
    <!--End Row-->

    <!--End Dashboard Content-->
@endsection
