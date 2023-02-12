@extends('backend.master')
@section('content')
<div>
<label for="name"></label>
      <input value="{{$bracat->name}}" type="text" name="name" class="form-control" placeholder="">
      <label for="">status</label>
      <input value="{{$bracat->status}}" type="text" name="status" class="form-control" placeholder="">
      <label for="">img</label>
      <input value="{{$bracat->img}}" type="text" name="img" class="form-control" placeholder="">

    </div>
@endsection