@extends('backend.master')
@section('content')
<form action="{{route('customer.update',$custo)}}" method="POST">
@csrf
<div class="row">
    
      <label for="">customer id</label>
      <input value="{{$custo->customer_id}}" name="customer_id" class="form-control" placeholder="" >
     
    </div>
    <div class="col">
      <label for="">customer name</label>
      <input value="{{$custo->customer_name}}" name="customer_name" class="form-control" placeholder="" >
     
    </div>
    <div class="col">
      <label for="">customer img</label>
      <input value="{{$custo->customer_img}}" name="customer_img" class="form-control" placeholder="" >
     
    </div>

    <div class="col">
      <label for="">customer mobile</label>
      <input value="{{$custo->customer_mobile}}" name="customer_mobile" class="form-control" placeholder="" >
     
    </div>

    <div class="col">
      <label for="">customer address</label>
      <input value="{{$custo->customer_address}}" name="customer_address" class="form-control" placeholder="" >
      
      <button type="submit" class="btn btn-primary">Submit</button> 
    </div>
  </div>
</form>
@endsection