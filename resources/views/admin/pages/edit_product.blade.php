@extends('admin.layouts.base')
@section('pageTitle')
    Product edit
@endsection
@section('content')
    <!--Start Dashboard Content-->

    <div class="card mt-3 p-3">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                {{session('success')}}
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="input-1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Product name"
                       value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="input-2">Category Name</label>
                <select class="form-control" name="category_id">
                    @foreach($categories as $item)
                        <option
                            value="{!! $item->id !!}" {!! $item->id == $data->category_id ? 'selected': '' !!}>{!! $item->name !!}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="input-2">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter price" value="{{$data->price}}">
            </div>
            <div class="form-group">
                <label for="input-2">Image</label>
                <input type="file" class="form-control-file" name="images[]" multiple  placeholder="Enter image" value="{{$data->images}}">
                <div class="row mt-2">
                    @foreach ($data->images as $image)
                        <div class="box-image">
                            <img src="{{asset('assets/product_images/'.$image->name)}}" class="picture-box">
                            <div class="wrap-btn-delete"><span data-id="img-{{ $image->id }}"
                                                               class="btn-delete-image">x</span></div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="form-group">
                <label for="input-2">Description</label>
                <textarea class="form-control" name="description"
                          placeholder="Enter Descripytion">{{$data->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="input-2">Amount</label>
                <input type="number" class="form-control" name="amount" min="0" placeholder="Enter Amount"
                       value="{{$data->amount}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5"> SAVE</button>
            </div>
        </form>
    </div>
    <!--End Row-->
    <script type="text/javascript">
        $(document).ready(function () {
            $(".box-image").on('click', '.btn-delete-image', function () {
                let id = $(this).data('id');
                let box = $(this).parents('.box-image');
                $.get( "{{ url('admin/product/delete/image/') }}" + '/' + id.split('-')[1], function( data ) {
                    if(data){
                        box.remove();
                    }else{
                        alert("Delete failed")
                    }
                });
            });
        });
    </script>
    <!--End Dashboard Content-->
@endsection
