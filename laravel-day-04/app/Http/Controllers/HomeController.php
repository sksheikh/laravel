<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public  $category;
    public $brand;
    public $product;

    public function home()
    {
        $this->category = Category::category();
        $this->brand = Brand::brand();
        $this->product = Product::product();

        return view('front.home.home',[
            'categories'=> $this->category,
            'brands'=>$this->brand,
            'products'=>$this->product

        ]);
    }

    public function fullName()
    {
        return view('front.full-name.full-name');
    }

//    public function category()
//    {
//        $this->category = Category::category();
//        return view('front.master',[
//            'categories'=> $this->category
//        ]);
//    }


}
