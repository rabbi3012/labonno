<?php

namespace App\Http\Controllers\backend;
use App\models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductContoller extends Controller
{
    public function list(){
    if(\request()->has('search'))
    {
        $search_key=request()->search;
        $prod= Product::where('product_name','LIKE','%'.$search_key.'%')->get();
    }else{
        $prod= Product::all();
    }

      
        return view('backend.page.product.list',compact('prod'));

    }
    public function create(){
        return view('backend.page.product.create');
    }

    public function store(Request $request){

        //dd($request->all());

        $fileName = null;
        if ($request->hasFile('product_img')) {
            $fileName = 'LABONNO' . '.' . date('Ymdhmsis') . '.' . $request->file('product_img')->getClientOriginalExtension();
            $request->file('product_img')->storeAs('uploads/product', $fileName);
        }
        Product::create([
        'product_name'=>$request->product_name,
        'product_quantity'=>$request->product_quantity,
        'product_price'=>$request->product_price,
        'product_img'=>$fileName,
        'product_categories'=>$request->product_categories,

        ]);
       return redirect()->route('product.list');
       }

       public function  view($id){
        $prod= Product::find($id);
        return view('backend.page.product.view',compact('prod'));
       } 

       public function delete($id){
        $prod=Product::find($id)->delete();
        return redirect()->route('brand.list')->with('message','Brand delete succesfully.');
       }

       public function edit($id){
        $prod= Product::find($id);
        return view('backend.page.product.edit',compact('prod'));
       }

       public function update(Request $request,$prod_id)
       {
        $prod= Product::find($prod_id);

        $prod->update([
            'product_name'=>$request->product_name,
            'product_quantity'=>$request->product_quantity,
            'product_price'=>$request->product_price,
            'product_img'=>$request->product_img,
            'product_categories'=>$request->product_categories,
    
        ]);
        return redirect()->route('brand.list')->with('message','Brand updated succesfully.');
}
}