@extends('backend.master')
@section('content')
<form action="" method="POST">

<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile number</th>
      <th scope="col">Password</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  <tr>
      <th scope="row">id</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
        <td>
          <a class="btn btn-success" href="">View</a>
          <a class="btn btn-primary" href="">Edit</a>
          <a class="btn btn-danger" href="">Delete</a>

        </td>
      </tr>
     
  </tbody>
</table>

</form>
@endsection