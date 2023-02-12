@extends('backend.master')
@section('content')
<div>
<label for="">Category Name</label>
      <input value="{{$subcategory->subcategory_name}}" type="text" name="subcategory_name" class="form-control" placeholder="">
      <label for="">Category details</label>
      <input value="{{$subcategory->subcategory_details}}" type="text" name="subcategory_details" class="form-control" placeholder="">

    </div>
@endsection