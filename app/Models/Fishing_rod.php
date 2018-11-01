<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fishing_rod extends Model
{
    protected $fillable=['rod_name',
                        'rod_length',
                        'rod_color',
                        'rod_action',
                        'rod_power',
                        'rod_line',
                        'rod_lure',
                        'rod_type',
                        'rod_brand',
                        'rod_price'
                        
    ];
}
