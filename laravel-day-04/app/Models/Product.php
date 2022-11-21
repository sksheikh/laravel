<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $product;

    public static function product()
    {
        self::$product =[
            '0'=>[
                'id'=>1,
                'name'=>'White Shirt',
                'price'=>'1200',
                'description'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',
                'image'=>'14.jpg'
            ],
            '1'=>[
                'id'=>2,
                'name'=>'Blue Shirt',
                'price'=>'1400',
                'description'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',
                'image'=>'12.jpg'
            ],
            '2'=>[
                'id'=>3,
                'name'=>'Check Shirt',
                'price'=>'1800',
                'description'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',
                'image'=>'11.jpg'
            ],
            '3'=>[
                'id'=>4,
                'name'=>'Half Shirt',
                'price'=>'1900',
                'description'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',
                'image'=>'13.jpg'
            ],
        ];
        return self::$product;
    }
}
