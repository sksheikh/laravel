<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category,$categories;
    public function addCategory()
    {
        return view('admin.category.add-category');
    }

    public function createCategory(Request $request)
    {
        Category::createCategory($request);
        return redirect()->back()->with('success','Created a product category successfully');

    }
    public function manageCategory()
    {
        $this->categories = Category::orderBy('id','Desc')->get();
        return view('admin.category.manage',[
            'categories'=>$this->categories,
        ]);
    }

    public function editCategory($id)
    {
       $this->category = Category::find($id);
        return view('admin.category.edit',[
            'category'=>$this->category
        ]);
    }

    public function updateCategory(Request $request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect('/manage-category')->with('success','Updated category successfully');
    }

    public function deleteCategory($id)
    {
        $this->category = Category::find($id);
        $this->category->delete();
        return redirect()->back()->with('success','Deleted category successfully');
    }
}
