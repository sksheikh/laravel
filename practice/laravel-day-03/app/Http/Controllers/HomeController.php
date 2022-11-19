<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public $product;
    public function home()
    {
        $this->product = Product::products();
        return view('home',[
            'products'=>$this->product
        ]);

    }

    public function productDetails($id)
    {
        $this->product = Product::products();

        foreach ($this->product as $product)
        {
            if($product['id']==$id)
            {
                return view('single-product',[
                    'results'=>$product
                ]);
            }
        }

    }
}
