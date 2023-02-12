@extends('backend.master')
@section('content')
<body>

<div class="container mt-3">
  <h2>PRODUCT'S</h2>

  <div class="row">
    <div class="col-md-6">
 <a class="btn btn-primary" href="{{route('product.create')}}">Create Product</a>
    </div>
    <div class="col-md-6">
      <form action="{{route('product.list')}}" method="get">
      <div class="row">
       <div class="col-md-8"> 
      <input class="form-control" type="text" placeholder="Search product" name="search">
    </div>
    <div class="col-md-4">
      <button type="submit" class="btn btn-primary">Search</button>
      <button onclick="printReport()" type="button" class="btn btn-success">Print</button>
    </div>
    </form>
</div>
</div>

 @if(session()->has('message'))

<p class="alert alert-success">{{session()->get('message')}}</p>

@endif
<div id="printableArea">

  <table class="table table-bordered">
    <thead><br>
      <tr><br>
      <th scope="col">id</th>
        <th scope="col">product name</th>
        <th scope="col">product quantity</th>
        <th scope="col">product price</th>
        <th scope="col">product img</th>
        <th scope="col">product categories</th>
        <th>Action</th>
      
      </tr>
    </thead>
    <tbody>
@foreach($prod as $data)
      <tr>
      <th scope="row">{{$data->id}}</th>
        <td>{{$data->product_name}}</td>
        <td>{{$data->product_quantity}}</td>
        <td>{{$data->product_price}}</td>
        <td><img width="50px" src="{{url('uploads/product',$data->product_img)}}" alt="" srcset=""></td>
        <td>{{$data->product_categories}}</td>
        <td>
          <a class="btn btn-success" href="{{route('product.view',$data->id)}}">View</a>
          <a class="btn btn-primary" href="{{route('product.edit',$data->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('product.delete',$data->id)}}">Delete</a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
</div>

<script>
		function printReport()
    {
			var printContents = document.getElementById("printableArea").innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
	</script>
@endsection