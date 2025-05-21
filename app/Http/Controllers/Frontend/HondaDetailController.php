<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Honda;

class HondaDetailController extends Controller
{
    public function index($id)
    {
        $item = Honda::find($id);
        return view('frontend.hondadetail' , compact('item'));
    }
}
