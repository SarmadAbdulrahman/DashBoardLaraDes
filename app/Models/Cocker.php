<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocker extends Model
{
    use HasFactory;
    protected $fillable = [
        'Shope_Name',
        'Shope_Type',
        'user_id',
    
    ];
}
