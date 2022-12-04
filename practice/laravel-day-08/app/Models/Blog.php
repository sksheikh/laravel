<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public static $blog,$image,$imageName,$imageUrl, $directory;



    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'blog-images/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;

    }
    public static function createNew($request)
    {
        self::$blog = new Blog();
        self::$blog->category_id = $request->category_id;
        self::$blog->title = $request->title;
        self::$blog->short_description = $request->short_description;
        self::$blog->long_description = $request->long_description;
        self::$blog->image = self::getImageUrl($request);
        return self::$blog->save();


    }

    public static function updateBlog($request,$id)
    {
        self::$blog = Blog::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$blog->image;
        }

        self::$blog->category_id = $request->category_id;
        self::$blog->title = $request->title;
        self::$blog->short_description = $request->short_description;
        self::$blog->long_description = $request->long_description;
        self::$blog->image = self::$imageUrl;
        return self::$blog->save();
    }
    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        return self::$blog->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }



}
