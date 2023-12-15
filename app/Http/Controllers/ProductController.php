<?php

namespace App\Http\Controllers;

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
}
