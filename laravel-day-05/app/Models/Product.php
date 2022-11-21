<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $product;
    protected $fillable =[
        'name','price','description','image'
    ];

    public static function createProduct($request)
    {
//        self::$product = new Product();
//        self::$product->name = $request->name;
//        self::$product->price = $request->price;
//        self::$product->description = $request->description;
//        self::$product->image = $request->image;
//        self::$product->save();
//        return 'success';

//        Product::create([
//            'name'=>$request->name,
//            'price'=>$request->price,
//            'description'=>$request->description,
//            'image'=>$request->image
//
//        ]);
        Product::create($request->all());

    }
}
