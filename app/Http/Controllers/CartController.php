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
    if(array_key_exists($id,$currentCart))
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
        return redirect()->back();
       
    
    }
    public function views(){
        return view('frontend.page.cart.view');
        
    }
}
