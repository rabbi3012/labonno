@extends('backend.master')
@section('content')

<form action="{{route('subcategory.create')}}" method="POST">
@csrf

  <div class="row">
    <div class="col">
      <label for="">Subcategory Name</label>
      <input type="text" name="subcategory_name" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">Subcategory details</label>
      <input type="text" name="subcategory_details" class="form-control" placeholder="">
    </div>
  </div>

 <br> <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection