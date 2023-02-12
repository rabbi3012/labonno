<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $custo= Customer::paginate(3);
        return view('backend.page.customer.list',compact('custo'));
    }
    public function create(){
       
        return view('backend.page.customer.create',);
    }
    public function store(Request $request){

        $fileName = null;
        if ($request->hasFile('customer_img')) {
            $fileName = 'LABONNO' . '.' . date('Ymdhmsis') . '.' . $request->file('customer_img')->getClientOriginalExtension();
            $request->file('customer_img')->storeAs('uploads/customer', $fileName);
        }

        Customer::create([
          'customer_id'=>$request->customer_id,
           'customer_name'=>$request->customer_name,
           'customer_img'=>$fileName,
           'customer_mobile'=>$request->customer_mobile,
           'customer_address'=>$request->customer_address,
        ]);
       return redirect()->route('customer.list');
       }

       public function view($id){
        $custo= Customer::find($id);
        return view('backend.page.customer.view',compact('custo'));
       }

       public function delete($id){
        $custo= Customer::find($id)->delete();
        return redirect()->route('customer.list')->with('message','delete succesfully.');
       } 

       public function edit($id)
       {

        $custo= Customer::find($id);
        return view('backend.page.customer.edit',compact('custo'));
       }
       
       public function update(Request $request,$custo_id)
       {
        $custo= Customer::find($custo_id);

        $custo->update([
        'customer_id'=>$request->customer_id,
        'customer_name'=>$request->customer_name,
        'customer_img'=>$request->customer_img,
        'customer_mobile'=>$request->customer_mobile,
        'customer_address'=>$request->customer_address,
        ]);
        return redirect()->route('customer.list')->with('message','customer updated succesfully.');
      }
    }