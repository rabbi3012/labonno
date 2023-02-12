@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>catagory list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Catagory: list</h2>
 <a class="btn btn-primary" href="{{route('form')}}">Category: form</a>
 @if(session()->has('message'))

<p class="alert alert-success">{{session()->get('message')}}</p>

@endif
  <table class="table table-bordered">
    <thead>
      <tr>
      <th scope="col">ID</th>
        <th scope="col">Category Name</th>
        <th scope="col">Category img</th>
        <th scope="col">Category Details</th>
        <th scope="col">Category status</th>
        <th scope="col">Action</th>
      
      </tr>
    </thead>
    <tbody>
      @foreach($lists as $cats)

      <tr>
      <th scope="row">{{$cats->id}}</th>
        <td>{{$cats->category_name}}</td>
        <td><img width="50px" src="{{url('uploads/category',$cats->category_img)}}" alt="" srcset=""></td>
        <td>{{$cats->category_details}}</td>
        <td>{{$cats->category_status}}</td>
        <td>
          <a class="btn btn-success" href="{{route('category.view', $cats->id)}}">View</a>
          <a class="btn btn-primary" href="{{route('category.edit', $cats->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('category.delete', $cats->id)}}">Delete</a>

        </td>
      </tr>
      
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
@endsection