<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.product.index', ['products' => $products]);  
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(ProductRequest $request)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/product/');
        $product = Product::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/product');  
    }

    public function show(Product $product)
    {
        //
    }
    public function edit(Product $product)
    {
        return view('admin.product.edit', ['product' => $product]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/product/');
        $product->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/product');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/product');
    }
}
