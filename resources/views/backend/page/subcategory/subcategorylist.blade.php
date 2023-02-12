@extends('backend.master')
@section('content')


<body>

<div class="container mt-3">
  <h2>Subcatagory: list</h2>
 <a class="btn btn-primary" href="{{route('formed')}}">Subcategory: form</a>
 @if(session()->has('message'))

<p class="alert alert-success">{{session()->get('message')}}</p>

@endif
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>id</th>
        <th>subCategory Name</th>
        <th>subCategory Details</th>
        <th>Action</th>
      
      </tr>
    </thead>
    <tbody>
    @foreach($subcat as $data)

      <tr>
      <th>{{$data->id}}</th>
        <td>{{$data->subcategory_name}}</td>
        <td>{{$data->subcategory_details}}</td>
        <td>
          <a class="btn btn-success" href="{{route('subcategory.view', $data->id)}}">View</a>
          <a class="btn btn-primary" href="{{route('subcategory.edit', $data->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('subcategory.delete', $data->id)}}">Delete</a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
@endsection