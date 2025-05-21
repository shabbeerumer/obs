<?php

namespace App\Http\Controllers\Backend\Others\HondaForm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Honda;

class HondaFormController extends Controller
{
    public function index()
    {
        return view('backend.hondaform');
    }

    public function store (Request $request){
     $data =  honda::create();
     $image = $request->file('image');
     $imagename = time().'.'.$image->getClientOriginalExtension();
     $image->move('upload/', $imagename);
     $data->image = $imagename;
     $data->title = $request->title;
     $data->description = $request->description;
     $data->price = $request->price;
     $data->save();
    return redirect()->back();
    }



}
