@extends('backend.master')
@section('content')
<div>
<label for="">Category Name</label>
      <input value="{{$category->category_name}}" type="text" name="category_name" class="form-control" placeholder="">

      <label for="">Category img</label>
      <input value="{{$category->category_img}}" type="text" name="category_img" class="form-control" placeholder="">

      <label for="">Category details</label>
      <input value="{{$category->category_details}}" type="text" name="category_details" class="form-control" placeholder="">

      <label for="">Category status</label>
      <input value="{{$category->category_status}}" type="text" name="category_status" class="form-control" placeholder="">

    </div>
@endsection