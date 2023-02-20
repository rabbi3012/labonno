<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id){
        $product=Product::find($id);
        // dd($product);
        // case 1: add new product to cart 
        $currentCart=session()->get('myCart');

         if(empty($currentCart))
         {
        $cart[$id]=[
            'product_id'=>$product->id,
            'product_img'=>$product->product_img,
            'product_name'=>$product->product_name,
            'product_price'=>$product->product_price,
            'quantity'=>1,
            'subtotal'=>$product->product_price,
        ];
        // dd($cart);
        session()->put('myCart',$cart);
        //end case1
    }
    // case 2: add existing product to cart
    elseif(array_key_exists($id,$currentCart))
    {
        ++$currentCart[$id]['quantity'];
        $currentCart[$id]['subtotal']=$currentCart[$id]['quantity']* $currentCart[$id]['product_price'];
        session()->put('myCart',$currentCart);
        // case 3: adding new product and cart is not empty 
    }else
    {
        $currentCart[$id]=[
            'product_id'=>$product->id,
            'product_img'=>$product->product_img,
            'product_name'=>$product->product_name,
            'product_price'=>$product->product_price,
            'quantity'=>1,
            'subtotal'=>$product->product_price,
        ];
        session()->put('myCart',$currentCart);
    }
        notify()->success('Product added to cart');
        return to_route('home');
       
    
    }
    public function views(){
        return view('frontend.page.cart.view');
        
    }
    public function checkout(){
        return view('frontend.page.cart.checkout');
    }

    public function Delete($id){
        $newCart=session()->get('myCart');
        unset($newCart[$id]);
        session()->put('myCart',$newCart);
        notify()->success('Deleted Successfully');
        return redirect()->back();
    }

    public function update(Request $request,$id){
        $currentCart=session()->get('myCart');
        $currentCart[$id]['quantity']=$request->qty;
        $currentCart[$id]['subtotal']=$currentCart[$id]['quantity']* $currentCart[$id]['product_price'];
        session()->put('myCart',$currentCart);

        return to_route("cart.view");
    }
}
