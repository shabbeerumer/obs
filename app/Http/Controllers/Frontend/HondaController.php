<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Honda;

class HondaController extends Controller
{
    public function index(){
        $data = Honda::all();
        return view('frontend.honda',compact('data'));
    }
}
