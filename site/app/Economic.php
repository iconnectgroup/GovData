<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Economic extends Model
{
    protected $fillable = [
        'state',
        'num_of_firms',
        'economic_group',
        'naics_id'
    ];
}
