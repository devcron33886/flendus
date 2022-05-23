<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        $products = Product::all();
        return view('welcome',compact('products'));
    }
    public function aerobics()
    {
        return view('classes.aerobics');
    }

    public function zumba()
    {
        return view('classes.zumba');
    }
}
