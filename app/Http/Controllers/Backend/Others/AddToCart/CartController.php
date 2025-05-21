<?php

namespace App\Http\Controllers\Backend\Others\AddToCart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{


   public function index(){
          
    //   $cart = session()->get('sessioncrud');
       return view('frontend.addtocart', 
    //    compact('cart')
    );
   }


      public function store(Request $request)
    {
        $crudsession = session('sessioncrud', []);

        $id = count($crudsession) + 1;


        $crudsession[$id] = [
            'id' => $id,
            'quantity' => $request->quantity,
            'image' => $request->image,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,

        ];

        session(['sessioncrud' => $crudsession]);

        return redirect()->route('frontend.addtocart');

    }


    public function remove($id){
        $cart = session()->get('sessioncrud');
        unset($cart[$id]);
        session()->put('sessioncrud', $cart);
        return redirect()->back();
    }
}
