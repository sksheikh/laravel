<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public static $brand;

    public static function brand()
    {
        self::$brand =[
            '0'=>[
                'id'=>1,
                'name'=>'Plus Point'
            ],
            '1'=>[
                'id'=>2,
                'name'=>'Rich Man'
            ],
            '2'=>[
                'id'=>3,
                'name'=>'Cats Eye'
            ],
        ];
        return self::$brand;
    }

}
