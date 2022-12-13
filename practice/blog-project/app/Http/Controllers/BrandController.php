<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brand,$brands;

    public function addBrand()
    {
        return view('admin.brand.add-brand');
    }

    public function createBrand(Request $request)
    {
        Brand::createBrand($request);
        return redirect()->back()->with('success','Created brand successfully');
    }

    public function manageBrand()
    {
        $this->brands = Brand::orderBy('id','DESC')->get();
        return view('admin.brand.manage',[
            'brands'=>$this->brands,
        ]);
    }

    public function editBrand($id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.edit',[
            'brand'=> $this->brand,
        ]);

    }

    public function updateBrand(Request $request,$id)
    {
        Brand::updateBrand($request,$id);
        return redirect('/manage-brand')->with('success','Updated brand successfully');
    }

    public function deleteBrand($id)
    {
        $this->brand = Brand::find($id);
        $this->brand->delete();
        return redirect()->back()->with('success','Deleted brand successfully');
    }
}
