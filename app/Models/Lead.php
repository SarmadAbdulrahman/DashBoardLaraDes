<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable=[
          'page_name'
        , 'channel_type'
        , 'channel_links'
        , 'channel_number'
        , 'channel_liker'
        ,'deal_status_id'
    ];
}
