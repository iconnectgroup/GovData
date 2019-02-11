<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profilelist extends Model
{
    protected $fillable = [
        'trade_name', 'contact', 'address', 'capabilities', 'economic_id', 'naics_id', 'state'
    ];
}
