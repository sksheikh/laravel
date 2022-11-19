<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $product;
    public static function products()
    {
        self::$product =[
            0=>[
                'id'=>1,
                'name'=>'White Showes',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel.',
                'price'=>'3000',
                'image' =>'13.jpeg'
            ],
            1=>[
                'id'=>2,
                'name'=>'Black Watch',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel.',
                'price'=>'4000',
                'image' =>'14.jpg'
            ],
            2=>[
                'id'=>3,
                'name'=>'Black Belt',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel.',
                'price'=>'5000',
                'image' =>'15.jpg'

            ],
            3=>[
                'id'=>4,
                'name'=>'White Shirt',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel.',
                'price'=>'3000',
                'image' =>'11.webp'
            ],
        ];
        return self::$product;
    }
}
