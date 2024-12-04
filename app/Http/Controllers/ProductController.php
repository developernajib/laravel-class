<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function productAdd(){
        return view('products.add');
    }

    public function productStore(Request $request){
        $nadim = new Product();
        $nadim->name = $request->name;
        $nadim->price = $request->product_price;
        $nadim->stock = $request->stock;
        $nadim->save();
        
        return redirect()->route('products.index');
    }

    public function productEdit($id){
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function productEditStore(Request $request, $id){
        $nadim = Product::find($id);
        $nadim->name = $request->name;
        $nadim->price = $request->product_price;
        $nadim->stock = $request->stock;
        $nadim->save();
        
        return redirect()->back();
    }

    public function productDelete($id){
        $nadim = Product::find($id);
        $nadim->delete();

        return redirect()->back();
    }
}
