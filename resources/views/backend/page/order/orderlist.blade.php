@extends('backend.master')
@section('content')
<h1>Order list Page</h1>

<div class="container">
    <a class="btn btn-primary" href="{{route('order.create')}}">create order</a>
</div>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Order Id</th>
            <th scope="col">Order Amount</th>
            <th scope="col">Order Date</th>
            <th scope="col">Order Details</th>
            <th scope="col">Action</th>
        </tr>
        
    </thead>
    <tbody>
    @foreach($order as $data)  
        <tr>
        <th scope="row">{{$data->id}}</th>
             <td>{{$data->Order_id}}</td>
             <td>{{$data->Order_Amount}}</td>
             <td>{{$data->Order_Date}}</td>
             <td>{{$data->Order_Details}}</td>

             <td>
            <a class="btn btn-info" href="">Edit</a>
             <a class="btn btn-danger" href="">Delete</a></td>
        </tr>
        @endforeach 
    </tbody>
    </table>
</div>
    @endsection