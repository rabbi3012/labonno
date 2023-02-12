@extends('backend.master')
@section('content')
<h2>Customar: list</h2>
 <a class="btn btn-primary" href="{{route('customer.create')}}">customer: list</a>

 @if(session()->has('message'))

<p class="alert alert-success">{{session()->get('message')}}</p>
@endif
<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">customer id</th>
      <th scope="col">customer name</th>
      <th scope="col">customer img</th>
      <th scope="col">customer mobile</th>
      <th scope="col">customer address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($custo as $data)
  <tr>
      <th scope="row">{{$data->id}}</th>
        <td>{{$data->customer_id}}</td>
        <td>{{$data->customer_name}}</td>
        <td><img width="70px" src="{{url('uploads/customer', $data->customer_img)}}" alt="" srcset=""></td>
        <td>{{$data->customer_mobile}}</td>
        <td>{{$data->customer_address}}</td>
        <td>
          <a class="btn btn-success" href="{{route('customer.view', $data->id)}}">View</a>
          <a class="btn btn-primary" href="{{route('customer.edit',$data->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('customer.delete',$data->id)}}">Delete</a>

        </td>
      </tr>
      @endforeach
  </tbody>
</table>
{{$custo->links()}}
@endsection