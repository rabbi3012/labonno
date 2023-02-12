<?php

namespace App\Http\Controllers\backend;

use notify;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

   public function list(){
    $lists=Category::all();
    //dd($lists);
    return view('backend.page.category.categorylist',compact('lists'));
   }
   public function form(){
    return view('backend.page.category.categoryform');
   }
   public function submit(Request $request){

    $fileName = null;
    if ($request->hasFile('category_img')) {
        $fileName = 'LABONNO' . '.' . date('Ymdhmsis') . '.' . $request->file('category_img')->getClientOriginalExtension();
        $request->file('category_img')->storeAs('uploads/category', $fileName);
    }
    $catagory=Category::create([
        'category_name'=>$request->category_name,
        'category_img'=>$fileName,
        'category_details'=>$request->category_details,
        'category_status'=>$request->category_status,
    ]);

    notify()->success('Category added successfully');

    return redirect()->route('list');
   }

   public function delete($id){
    $category=Category::find($id)->delete();
    return redirect()->route('list')->with('message','delete succesfully.');

   }

   public function edit($id){
    $category=Category::find($id);
    return view('backend.page.Category.edit',compact('category'));

   }

   public function update(Request $request,$cats){
    $category=Category::find($cats);

    $category->update([
        'category_name'=>$request->category_name,
        'category_img'=>$request->category_img,
        'category_details'=>$request->category_details,
        'category_status'=>$request->category_status,
    ]);
    return redirect()->route('list')->with('message','category updated succesfully.');

   }
   public function viewCategory($id){
    $category=Category::find($id);
    return view('backend.page.Category.viewCategory',compact('category'));
   }
}
