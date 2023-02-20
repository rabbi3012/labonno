<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        $categories=Category::all();
        $products=Product::take(3)->get();
        // dd($categories->all());
        return view('frontend.page.homepage',compact('categories','products'));
    }
    public function regsubmit(Request $request){
        //dd($request->all());
          User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
          ]);
          notify()->success('Registration Done');
          return redirect()->back();

    }
    public function frontlogin(Request $request){
      $credentials=$request->except('_token');
      $authentication=auth()->attempt($credentials);
      if($authentication){
          notify()->success('Login Succesful');

          return to_route('home');
          
      }
      else{
        notify()->error('Please Register');
          return back();
      }

   }
   public function frontlogout(){
      auth()->logout();
      notify()->success('Logout Succesful');
      return to_route('home');
   }

   public function search(Request $request)
   {
//        dd(\request()->all());
       $search_key=$request->search_key;
//        $column_name=$request->column_name;
       $order_by= $request->order_by ?? 'asc';


       $products=Product::where('product_name','LIKE','%'.$search_key.'%')
           ->orderBy('product_price',$order_by)
           ->get();

       return view('frontend.page.search',compact('products'));



   }
   public function about(){
    return view('frontend.page.about');
   }
   public function contact(){
    return view('frontend.page.contact');
   }
}
