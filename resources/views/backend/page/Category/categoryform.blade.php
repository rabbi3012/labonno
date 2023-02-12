@extends('backend.master')
@section('content')

<form action="{{route('category.create')}}" method="POST" enctype="multipart/form-data">
  
@csrf
  <div class="row">
    <div class="col">
      <label for="">Category Name</label>
      <input type="text" name="category_name" class="form-control" placeholder="">
    </div>
    <div class="row">
    <div class="col">
      <label for="">Category img</label>
      <input type="file" name="category_img" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">Category details</label>
      <input type="text" name="category_details" class="form-control" placeholder="">
    </div>
  </div>
  <div class="col">
      <label for="">Category status</label>
      <input type="text" name="category_status" class="form-control" placeholder="">
    </div>
  </div>

 <br> <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection