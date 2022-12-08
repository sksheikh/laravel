<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public $brand,$brands;

    public function addBrand()
    {
        return view('admin.brand.add-brand');
    }

    public function newBrand(Request $request)
    {
        Brand::createBrand($request);
        return redirect()->back()->with('success','Brand created successfully');

    }


    public function manageBrand()
    {
        $this->brands = Brand::orderBy('id', 'DESC')->get();
        return view('admin.brand.manage',[
            'brands'=>$this->brands
        ]);
    }

    public function editBrand($id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.edit',[
            'brand'=> $this->brand
        ]);

    }

    public function updateBrand(Request $request,$id)
    {
        Brand::updateBrand($request,$id);
        return redirect('/manage-brand')->with('success','Brand updated successfully ');
    }

    public function deleteBrand($id)
    {
        $this->brand = Brand::find($id);
        $this->brand->delete();
        return redirect()->back()->with('success','Deleted brand successfully');
    }
}
