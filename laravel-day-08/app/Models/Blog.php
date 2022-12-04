<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    Public static $blog,$image,$imageName,$directory,$imageUrl;
    protected $fillable =['category_id','title','short_description','long_description','image'];

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'blog-images/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;

    }

    public static function newBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->category_id = $request->category_id;
        self::$blog->title =$request->title;
        self::$blog->short_description = $request->short_description;
        self::$blog->long_description = $request->long_description;
        self::$blog->image = self::getImageUrl($request);
        self::$blog->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
