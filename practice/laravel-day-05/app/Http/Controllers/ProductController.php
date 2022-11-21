<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $product;
    public function addProduct()
    {
        return view('front.product.add-product');
    }

    public function saveProduct(Request $request)
    {
        Product::saveProduct($request);
        return redirect()->back()->with('message','saved product successfully');

    }

    public function manageProduct()
    {
        $this->product = Product::all();
        return view('front.product.manage-product',[
            'products'=>$this->product
        ]);
    }

    public function editProduct($id)
    {
        $this->product =Product::find($id);
        return view('front.product.edit-product',[
            'product'=>$this->product
        ]);

    }
    public function updateProduct(Request $request,$id)
    {
       $this->product = Product::updateProduct($request,$id);
       return redirect('/manage-product')->with('message','Product updated successfully');
    }
    public function deleteProduct($id)
    {
        $this->product = Product::deleteProduct($id);
        return redirect()->back()->with('message','deleted product successfully');
    }

}
