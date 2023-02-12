@extends('backend.master')
@section('content')
<div class="row">
    <div class="col">
      <label for="">product name</label>
      <input type="{{$prod->product_name}}" name="product_name" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product quantity</label>
      <input type="{{$prod->product_quantity}}" name="product_quantity" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product price</label>
      <input type="{{$prod->product_price}}" name="product_price" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product img</label>
      <input type="{{$prod->product_img}}" name="product_img" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">product categories</label>
      <input type="{{$prod->product_categories}}" name="product_categories" class="form-control" placeholder="">
    </div>
  </div>
@endsection