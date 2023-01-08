@extends('admin.layouts.base')
@section('pageTitle')
    Category
@endsection
@section('content')
    <!--Start Dashboard Content-->

    <div class="card mt-3">
            <form method="post">
                @csrf
                <div class="form-group">
                    <label for="input-1">Name</label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter Category name">
                </div>
                <div class="form-group">
                    <label for="input-2">Detail</label>
                    <input type="text" class="form-control" name="detail"  placeholder="Enter Detail">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light px-5"> ADD</button>
                </div>
            </form>
    </div>
    <!--End Row-->

    <!--End Dashboard Content-->
@endsection
