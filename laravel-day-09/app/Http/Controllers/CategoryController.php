<?php
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category,$categories;

    public function index()
    {
        return view('category.index');
    }

    public function store(Request $request)
    {
        Category::newCategory($request);
        return redirect('/category/add')->with('message', 'category info save successfully');

    }
    public function manage()
    {
        $this->categories = Category::all();

        return view('category.manage',[
            'categories'=>$this->categories
        ]);
    }
    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('category.edit',[
            'category'=>$this->category
        ]);

    }

    public function update(Request $request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect('/category/manage')->with('message','Updated category successfully');

    }
    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect()->back()->with('message','Deleted category successfully');
    }
}
