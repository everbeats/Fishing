<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fishing_reel extends Model
{
    protected $fillable=['reel_name',
                         'reel_size',
                         'reel_color',
                         'reel_type',
                         'reel_brand',
                         'reel_price'
    ];
}
