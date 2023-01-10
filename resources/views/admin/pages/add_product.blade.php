@extends('admin.layouts.base')
@section('pageTitle')
    Product
@endsection
@section('content')
    <!--Start Dashboard Content-->

    <div class="card mt-3 p-3">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="input-1">Name</label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter Product name">
                </div>
                <div class="form-group">
                    <label for="input-2">Category Name</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $item)
                            <option value="{!! $item->id !!}">{!! $item->name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-2">Price</label>
                    <input type="text" class="form-control" name="price"  placeholder="Enter price">
                </div>
                <div class="form-group">
                    <label for="input-2">Image</label>
                    <input type="file" class="form-row" name="images[]" multiple  placeholder="Enter image">
                </div>
                <div class="form-group">
                    <label for="input-2">Description</label>
{{--                    <input type="text" class="form-control" name="description"  placeholder="Enter Descripytion">--}}
                    <textarea class="form-control" name="description"  placeholder="Enter Descripytion"></textarea>
                </div>
                <div class="form-group">
                    <label for="input-2">Amount</label>
                    <input type="number" class="form-control" name="amount" min="0" placeholder="Enter Amount" value="1">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light px-5"> ADD</button>
                </div>
            </form>
    </div>
    <!--End Row-->

    <!--End Dashboard Content-->
@endsection
