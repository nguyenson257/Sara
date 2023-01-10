@extends('admin.layouts.base')
@section('pageTitle')
    Category
@endsection
@section('content')
    <!--Start Dashboard Content-->

    <div class="card mt-3">
            <div  class="table-responsive">
                <table  class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th style="width:300px" scope="col-1">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $value)
                    <tr>
                        <th scope="row">{{$value->id}}</th>
                        <th scope="row">
                            <img style="width:40px; height:40px" src="{{asset('assets/product_images/'.$value->images[0]['name'])}}" alt="">
                        </th>
                        <td style="max-width: 300px;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                   ">{{$value->name}}</td>
                        <td>{{$value->category['name']}}</td>
                        <td>{{$value->price}}</td>
                        <td style="max-width: 300px;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                   ">{{$value->description}}</td>
                        <td>{{$value->amount}}</td>
                        <td>
                            <a href="{{route('productGetedit', ['id'=>$value->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                            &nbsp
                            <a href="{{route('productdelete',['id'=>$value->id])}}"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
                <a href="{{route('productGetadd')}}" class="btn btn-light px-5"><i class="fa fa-plus-square" aria-hidden="true"></i> ADD</a>
                <br><br>
                {{$data->links('pagination::bootstrap-4')}}
            </div>
    </div>
    <!--End Row-->

    <!--End Dashboard Content-->
@endsection
