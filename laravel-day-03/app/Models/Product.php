<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $products;

    public static function products()
    {
        self::$products = [
            0=> [
                'id'=>1,
                'name'=>'White shirt',
                'price'=>'6000',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'11.webp'
            ],
            1=> [
                'id'=>2,
                'name'=>'White Pant',
                'price'=>'4000',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'11.webp'
            ],
            2=> [
                'id'=>3,
                'name'=>'Black Belt',
                'price'=>'3000',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'15.jpg'
            ],
            3=> [
                'id'=>4,
                'name'=>'White Shoes',
                'price'=>'4000',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'13.jpeg'
            ],
            4=> [
                'id'=>5,
                'name'=>'Black Watch',
                'price'=>'4000',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'14.jpg'
            ]

        ];
        return self::$products;

    }
}
