@extends('backend.master')
@section('content')
<form action="{{route('product.update', $prod->id)}}" method="POST">
@csrf
<div class="row">
    <div class="col">
      <label for="">product name</label>
      <input value="{{$prod->product_name}}" type="text" name="product_name" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product quantity</label>
      <input value="{{$prod->product_quantity}}" type="text" name="product_quantity" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product price</label>
      <input value="{{$prod->product_price}}" type="text" name="product_price" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product img</label>
      <input value="{{$prod->product_img}}" type="text" name="product_img" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product categories</label>
      <input value="{{$prod->product_categories}}" type="text" name="product_categories" class="form-control" placeholder="">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection