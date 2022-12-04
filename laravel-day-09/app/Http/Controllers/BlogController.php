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
            'categories'=>$this->categories,
        ]);

    }

    public  function store (Request $request)
    {
        Blog::createNewBlog($request);
        return redirect()->back()->with('message','Created new blog successfully');

    }
    public function  manage()
    {
        $this->blogs = Blog::all();

        return view('blog.manage',[
            'blogs'=>$this->blogs,
        ]);
    }

    public function detail($id)
    {
       $this->blog = Blog::find($id);
        return view('blog.detail',[
            'blog' => $this->blog,
        ]);

    }

    public function edit($id)
    {
        $this->blog = Blog::find($id);
        $this->categories = Category::all();

        return view('blog.edit',[
            'blog'=>$this->blog,
            'categories'=>$this->categories,
        ]);
    }


}
