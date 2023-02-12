@extends('backend.master')
@section('content')
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col">
      <label for="">product name</label>
      <input type="text" name="product_name" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product quantity</label>
      <input type="text" name="product_quantity" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product price</label>
      <input type="text" name="product_price" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product img</label>
      <input type="file" name="product_img" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product categories</label>
      <input type="text" name="product_categories" class="form-control" placeholder="">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection