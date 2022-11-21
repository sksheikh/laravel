<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $category;

    public static function category()
    {
        self::$category =[
            '0'=>[
                'id'=>1,
                'name'=>'Mens Fashion'
            ],
            '1'=>[
                'id'=>2,
                'name'=>'Womens Fashion'
            ],
            '2'=>[
                'id'=>3,
                'name'=>'Kids Fashion'
            ],
        ];
        return self::$category;
    }
}
