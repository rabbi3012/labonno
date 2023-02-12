@extends('backend.master')
@section('content')
<h2>Brands list</h2>
 <a class="btn btn-primary" href="{{route('brand.create')}}">Create New Brand</a>

@if(session()->has('message'))

<p class="alert alert-success">{{session()->get('message')}}</p>

@endif

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col"> Brand Img</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bracat as $data)
  <tr>
      <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->status}}</td>
        <td><img width="50px" src="{{url('uploads/brand', $data->brand_img)}}" alt="" srcset=""></td>
        <td>
          <a class="btn btn-success" href="{{route('brand.view',$data->id)}}">View</a>
          <a class="btn btn-primary" href="{{route('brand.edit',$data->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('brand.delete',$data->id)}}">Delete</a>

        </td>
      </tr>
  @endforeach
  </tbody>
</table>
@endsection
