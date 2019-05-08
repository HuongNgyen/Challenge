<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    public function show($id){
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }
    public function destroy($id)
    {
        $product = Product::destroy($id);
        return redirect()->route('products.index');
    }
    public function create()
    {
        return view('products.create');
    }
    // function luu tru nguoi dung
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
        // $product = DB::table('products')->insert([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
        return redirect('/products');
    }
    public function edit($id)
    {
        $products = Product::find($id);
        return view('products.edit', ['products' => $products]);
    }
   
    public  function update(Request $request,$id){
        $product = Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->save();
        return redirect('/products');
    }
}   
