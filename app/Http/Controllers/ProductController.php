<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use \App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
        // get data products
        $products = Product::when($request->input('name'), function ($query) use ($request) {
            return $query->where('name', 'like', '%' . Str::lower($request->input('name')) . '%');
        })->orderBy('id', 'desc')->paginate(10);
        return view('pages.products.index', compact('products'));
    }

    public function create()
    {
        return view('pages.products.create');
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
        Product::create($data);
        
        return redirect()->route('products.index')->with('success', 'Product has been created!');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('pages.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages.products.edit', compact('product'));
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product has been updated!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product has been deleted!');
    }
}
