@extends('backend.master')
@section('content')
<form action="{{route('brand.update', $brand->id)}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col">
      <label for="">name</label>
      <input value="{{$brand->name}}" type="text" name="name" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">status</label>
      <input value="{{$brand->status}}" type="text" name="status" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for=""> Brand Img</label>
      <input value="{{$brand->brand_img}}" type="text" name="brand_img" class="form-control" placeholder="">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection