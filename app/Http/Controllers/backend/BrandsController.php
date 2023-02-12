<?php

namespace App\Http\Controllers\backend;
use App\models\Brands;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function list(){
        $bracat= Brands::all();
        return view('backend.page.brands.list',compact('bracat'));
    }


    public function create(){
        return view('backend.page.brands.create');
    }


    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'status'=>'required',
            'brand_img'=>'required',
        ]);
        $fileName = null;
        if ($request->hasFile('brand_img')) {
            $fileName = 'LABONNO' . '.' . date('Ymdhmsis') . '.' . $request->file('brand_img')->getClientOriginalExtension();
            $request->file('brand_img')->storeAs('uploads/brand', $fileName);
        }
        Brands::create([ 
            'name'=>$request->name,
            'status'=>$request->status,
            'brand_img'=>$fileName
        ]);
        return redirect()->route('brand.list');
       }


       public function view($id){
        $bracat= Brands::find($id);
        return view('backend.page.brands.view',compact('bracat'));
       } 


       public function delete($id){
        $bracat= Brands::find($id)->delete();
        return redirect()->route('brand.list')->with('message','delete succesfully.');
       } 


       public function edit($id)
       {

        $brand= Brands::find($id);
        return view('backend.page.brands.edit',compact('brand'));
       }


       public function update(Request $request,$brand_id)
       {
        $brand= Brands::find($brand_id);

        $brand->update([
            'name'=>$request->name,
            'status'=>$request->status,
            'img'=>$request->img,
        ]);
        
        //session
        return redirect()->route('brand.list')->with('message','Brand updated succesfully.');


       }
}
