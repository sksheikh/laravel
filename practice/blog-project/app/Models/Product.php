<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product,$products,$uploadImage,$imageName,$directory,$imageUrl;


    public static function uploadedImage($request)
    {
        self::$uploadImage = $request->file('image');
        self::$imageName = self::$uploadImage->getClientOriginalName();
        self::$directory = 'admin/assets/images/uploaded-image/';
        self::$uploadImage->move(self::$directory,self::$imageName);
        return self::$imageUrl = self::$directory.self::$imageName;
    }

    public static function newProduct($request)
    {
        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        self::$product->category_id = $request->category_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->status = $request->status;
        self::$product->image = self::uploadedImage($request);
        self::$product->save();

    }

    public static function updateProduct($request,$id)
    {
        self::$product = Product::find($id);
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        self::$product->category_id = $request->category_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->status = $request->status;
        self::$product->image = self::uploadedImage($request);
        self::$product->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
