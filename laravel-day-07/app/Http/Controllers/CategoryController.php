<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category;
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
        return view('category.manage');
    }
}
