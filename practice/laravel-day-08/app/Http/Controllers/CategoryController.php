<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public $categories,$category;
    public function index()
    {
        return view('category.index');
    }

    public function store(Request $request)
    {
        Category::newCategory($request);
        return redirect()->back()->with('message','Created a new category successfully');
    }

    public function manage()
    {
        $this->categories = Category::all();
        return view('category.manage',[
           'categories'=>$this->categories,
        ]);

    }

    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('category.edit',[
            'category' => $this->category
        ]);
    }

    public function update(Request $request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect('/category/manage')->with('message','Updated Category info successfully');

    }

    public function delete($id)
    {
        Category::deleteProduct($id);
        return redirect()->back()->with('message','Deleted category successfully');
    }
}
