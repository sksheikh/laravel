<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;

class BlogController extends Controller
{
    public $categories,$category,$blogs,$blog;
    public function index()
    {
       $this->categories = Category::all();
        return view('blog.index',[
            'categories'=>$this->categories
        ]);
    }

    public function store(Request $request)
    {
        Blog::createNew($request);
        return redirect()->back()->with('message','Created new blog successfully');

    }

    public function manage()
    {
       $this->blogs = Blog::all();
       return view('blog.manage',[
           'blogs'=>$this->blogs
       ]);
    }

    public function edit($id)
    {
        $this->blog = Blog::find($id);
        $this->category = $this->blog->category;

        return view('blog.edit',[
            'blog'=>$this->blog,
            'category'=> $this->category
        ]);
    }

    public function update(Request $request, $id)
    {
        Blog::updateBlog($request,$id);
        return redirect('/blog/manage')->with('message','Updated blog info successfully');

    }

    public function delete($id)
    {
        Blog::deleteBlog($id);
        return redirect()->back()->with('message','Deleted blog successfully');
    }
}
