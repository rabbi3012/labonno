@extends('backend.master')
@section('content')
<form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    
      <label for="">name</label>
      <input type="text" name="name" class="form-control" placeholder="" >
     
    </div>
    <div class="col">
      <label for="">status</label>
      <input type="text" name="status" class="form-control" placeholder="" >
     
    </div>
    <div class="col">
      <label for=""> Brand Img</label>
      <input type="file" name="brand_img" class="form-control" placeholder="" >
     
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection