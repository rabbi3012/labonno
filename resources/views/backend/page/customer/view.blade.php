@extends('backend.master')
@section('content')

<div class="row">
    
      <label for="">customer id</label>
      <input type="{{$custo->customer_id}}" name="customer_id" class="form-control" placeholder="" >
     
    </div>
    <div class="col">
      <label for="">customer name</label>
      <input type="{{$custo->customer_name}}" name="customer_name" class="form-control" placeholder="" >
     
    </div>
    <div class="col">
      <label for="">customer img</label>
      <input type="{{$custo->customer_img}}" name="customer_img" class="form-control" placeholder="" >
     
    </div>

    <div class="col">
      <label for="">customer mobile</label>
      <input type="{{$custo->customer_mobile}}" name="customer_mobile" class="form-control" placeholder="" >
     
    </div>

    <div class="col">
      <label for="">customer address</label>
      <input type="{{$custo->customer_address}}" name="customer_address" class="form-control" placeholder="" >
     
    </div>
  </div>
</form>
@endsection