<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::with('category')->paginate(1);
        return view('Front.Product.index')->with($data);
    }

    public function show($id)
    {
        $data['product'] = Product::with('category')
            ->findOrFail($id);
        return view('Front.Product.show')->with($data);
    }
}