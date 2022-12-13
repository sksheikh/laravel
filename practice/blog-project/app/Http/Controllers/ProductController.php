<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use function Termwind\ValueObjects\pr;

class ProductController extends Controller
{
    private $product,$products,$category,$categories,$brand,$brands;

    public function addProduct()
    {
        $this->categories = Category::where('status',1)->get();
        $this->brands = Brand::where('status',1)->get();
        return view('admin.product.add',[
            'categories'=>$this->categories,
            'brands'=>$this->brands
        ]);
    }

    public function newProduct(Request $request)
    {
//        return $request->file();
        Product::newProduct($request);
        return redirect()->back()->with('success','Created product successfully');
    }

    public function manageProduct()
    {
//        return $this->products = Product::orderBY('id','DESC')->get();
        $this->products = Product::orderBY('id','DESC')->get();
        return view('admin.product.manage',[
            'products'=>$this->products,
        ]);
    }
    public function editProduct($id)
    {
        $this->categories = Category::where('status',1)->get();
        $this->brands = Brand::where('status',1)->get();
        $this->product = Product::find($id);
        return view('admin.product.edit',[
            'product'=>$this->product,
            'categories'=>$this->categories,
            'brands'=>$this->brands
        ]);
    }

    public function deleteProduct($id)
    {
        $this->product = Product::find($id);
        $this->product->delete();
        return redirect()->back()->with('success','Deleted product successfully');
    }

    public function updateProduct(Request $request,$id)
    {
        Product::updateProduct($request,$id);
        return redirect('/manage-product')->with('success','updated product successfully');
    }
}
