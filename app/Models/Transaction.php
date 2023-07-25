<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'product_name',
        'product_price',
        'product_desc',
        'cart_qty',
        'status',
        'total_price',
        // Add any other attributes you want to mass assign
    ];
}
