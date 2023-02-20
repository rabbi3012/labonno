@extends('frontend.master')
@section('content')
<div class="container mt-5 mb-5">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

body {
  font-family: 'Manrope', sans-serif;
  background:#eee;
}

.size span {
  font-size: 11px;
}

.color span {
  font-size: 11px;
}

.product-deta {
  margin-right: 70px;
}

.gift-card:focus {
  box-shadow: none;
}

.pay-button {
  color: #fff;
}

.pay-button:hover {
  color: #fff;
}

.pay-button:focus {
  color: #fff;
  box-shadow: none;
}

.text-grey {
  color: #a39f9f;
}

.qty i {
  font-size: 11px;
}
            </style>
                   <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="p-2">
                    @if(session()->has('myCart'))
                    <h4>Shopping cart ({{count(session()->get('myCart'))}})</h4>
                    @else
                        <h4>Shopping cart(0)</h4>
                    @endif
                    <div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort by:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>
                </div>

                @if(session()->has('myCart'))
                @foreach(session()->get('myCart') as $key=>$cart)
                <form action="{{route('update',$key)}}">
                <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                    <div class="mr-1"><img class="rounded" src="{{url('/uploads/product/'.$cart['product_img'])}}" width="70"></div>
                    <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$cart['product_name']}}</span>
                        <div class="d-flex flex-row product-desc">
                            <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                            <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                      <input type="number" name="qty" id="" value="{{$cart['quantity']}}">
                        <i class="fa fa-plus text-success"></i></div>
                    <div>
                        <h5 class="text-grey"><span class="font-weight-bold">Price:</span>{{$cart['product_price']}} BDT</h5>
                        
                        <h5 class="text-grey"><span class="font-weight-bold">Subtotal:</span>{{$cart['subtotal']}} BDT</h5>
                    </div>

                    <div>
                      <a class="btn btn-danger" href="{{route('Delete',$key)}}">Delete</a>
                    </div>

                    <div>
                      <td>
                      <button class="btn btn-primary" type="submit">Update</button>
                      </td>
                      
                    </div>
                   
                    
                </div>
                </form>
                @endforeach
                @endif
                

                

                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
                       <p>Total :{{array_sum(array_column(session()->get('myCart'),'subtotal'))}}</p>
                    </div>
                    
                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="text" class="form-control border-0 gift-card" placeholder="discount code/gift card"><button class="btn btn-outline-warning btn-sm ml-2" type="button">Apply</button></div>
                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
                        <a href="{{route('home')}}"><button class="btn btn-warning btn-block btn-lg ml-2 pay-button" type="button">Add more</button></a>
                    </div>
                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
                      <a href="{{route('check.out')}}" <button class="btn btn-warning btn-block btn-lg ml-2 pay-button" type="button">Proceed to pay</a>
                         
                    </div>
                </div>
            </div>
        </div>
@endsection