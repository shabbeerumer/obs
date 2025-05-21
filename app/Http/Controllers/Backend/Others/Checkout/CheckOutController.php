<?php

namespace App\Http\Controllers\Backend\Others\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\productdetail;
use App\Models\userdetail;
use App\Mail\welcomemail;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
   public function store(Request $request)
{
    $cart = session('sessioncrud'); 
   
   $products = [];

foreach ($cart as $id => $item) {
    $product = new productdetail();
    $product->image = $item['image'];
    $product->title = $item['title'];
    $product->price = $item['price'];
    $product->Quantity = $item['quantity'];
    $product->Subtotal = $item['price'] * $item['quantity'];
    $product->Total = array_sum(array_map(function($i) {
        return $i['price'] * $i['quantity'];
    }, $cart));
    $product->save();

    $products[] = $product;
}

    $userdetail = new userdetail();
    $userdetail->full_name = $request->name;
    $userdetail->email_address = $request->email;
    $userdetail->phone_number = $request->phone;
    $userdetail->delivery_address = $request->address;
    $userdetail->save();

    session()->forget('sessioncrud');


Mail::to($userdetail->email_address)->send(new welcomemail($userdetail, collect($products)));

    return redirect()->back()->with('success', 'Order placed successfully.');
}

}
