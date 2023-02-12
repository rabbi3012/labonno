<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(){
        $order= Order::all();
        return view('backend.page.order.orderlist',compact('order'));
    }
    public function create(){
        return view('backend.page.order.create');
}
public function store(Request $request){
    //dd($request->all());
    Order::create([
        'Order_id'=>$request->order_id,
        'Order_Amount'=>$request->order_amount,
        'Order_Date'=>$request->order_date,
        'Order_Details'=>$request->order_details,
        
    ]);
    return redirect()->back();
   
}
}