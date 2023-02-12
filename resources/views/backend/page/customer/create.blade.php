@extends('backend.master')
@section('content')
<form action="{{route('customer.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    
      <label for="">customer id</label>
      <input type="text" name="customer_id" class="form-control" placeholder="" >
     
    </div>
    <div class="col">
      <label for="">customer name</label>
      <input type="text" name="customer_name" class="form-control" placeholder="" >
     
    </div>
    <div class="col">
      <label for="">customer img</label>
      <input type="file" name="customer_img" class="form-control" placeholder="" >
     
    </div>

    <div class="col">
      <label for="">customer mobile</label>
      <input type="text" name="customer_mobile" class="form-control" placeholder="" >
     
    </div>

    <div class="col">
      <label for="">customer address</label>
      <input type="text" name="customer_address" class="form-control" placeholder="" >
     
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection