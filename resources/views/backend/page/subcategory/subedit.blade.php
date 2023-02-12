@extends('backend.master')
@section('content')

<form action="{{route('subcategory.update', $subcategory->id)}}" method="POST">

@csrf
  <div class="row">
    <div class="col">
      <label for="">subcategory Name</label>
      <input value="{{$subcategory->subcategory_name}}" type="text" name="subcategory_name" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="">subcategory details</label>
      <input value="{{$subcategory->subcategory_details}}" type="text" name="subcategory_details" class="form-control" placeholder="">
    </div>
  </div>

 <br> <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection