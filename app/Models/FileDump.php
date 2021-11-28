<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileDump extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_name',
        'trace',
        'status',
        'readingDate'

    ];
}
