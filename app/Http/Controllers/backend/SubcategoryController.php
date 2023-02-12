<?php

namespace App\Http\Controllers\backend;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubcategoryController extends Controller
{
    public function listed(){
        $subcat= Subcategory::all();
        return view('backend.page.subcategory.subcategorylist',compact('subcat'));
    }
    public function formed(){
        return view('backend.page.subcategory.subcategoryform');
    }
    public function submited(Request $request){
        //dd($request->all());
        Subcategory::create([
            'subcategory_name'=>$request->subcategory_name,
            'subcategory_details'=>$request->subcategory_details,
        ]);
        return redirect()->route('listed');
       
    }
    public function deleted($id){
        $subcat=Subcategory::find($id)->delete();
        return redirect()->route('listed')->with('message','delete succesfully.');
    }  
    public function viewsubcategory($id){
        $subcategory=Subcategory::find($id);
        return view('backend.page.subcategory.viewsubcategory',compact('subcategory'));
       } 
       
   public function subedit($id){
    $subcategory=Subcategory::find($id);
    return view('backend.page.subcategory.subedit',compact('subcategory'));
   } 
   public function updated(Request $request,$subcategory_id){
    $subcategory=Subcategory::find($subcategory_id);

    $subcategory->updated([
        'subcategory_name'=>$request->subcategory_name,
        'subcategory_details'=>$request->subcategory_details,
    ]);
    return redirect()->route('listed')->with('message','subcategory updated succesfully.');
}
}
