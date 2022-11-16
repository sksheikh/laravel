<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $products;

    public function home()
    {
        $this->products = Product::products();

        return view('home',[
            'products' => $this->products,
        ]);

    }

    public function ProductDetails($id)
    {
        $this->products = Product::products();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return view('details',[
                   'product' => $product,
                ]);
            }
        }
    }
}
