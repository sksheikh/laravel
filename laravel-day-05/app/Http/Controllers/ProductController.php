<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public $product;
    public function addProduct()
    {
        return view('front.product.add-product');
    }
    public function saveProduct( Request $request)
    {
        Product::createProduct($request);
        return redirect()->back();


    }
}
