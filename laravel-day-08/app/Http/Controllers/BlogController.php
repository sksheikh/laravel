<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $categories,$blogs,$blog;

    public function index()
    {
        $this->categories = Category::all();
        return view('blog.index',[
            'Categories'=>$this->categories
        ]);

    }

    public  function store (Request $request)
    {
        Blog::newBlog($request);
        return redirect('/blog/add')->with('message','Blog info create successfully');

    }
    public function  manage()
    {
        $this->blogs = Blog::all();
//        return $this->blogs;
        return view('blog.manage',[
            'blogs'=>$this->blogs
        ]);
    }
}
