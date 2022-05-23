<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $categories=Category::where('visibility',"=",1)->get();
        $products = Product::where('status',"=",1)->get();
        return view('products.index',compact('products','categories'));
    }

    protected function product($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('products.product',compact('product'));
    }

    public function order(StoreOrderRequest $request)
    {
        $order=Order::create($request->all());
        return redirect()->route('welcome')->with('message','Order Submitted successfully');
    }
}
