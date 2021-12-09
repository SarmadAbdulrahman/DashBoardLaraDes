<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable=[
        'cooker_id', 'gat_id', 'item_name', 'item_desc', 'item_img', 'unit_price', 'option'
    ];
}
