<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.category.add-category');
    }

    public function createCategory(Request $request)
    {
        Category::createCategory($request);
        return redirect()->back()->with('success','Created a product category successfully');

    }
}
