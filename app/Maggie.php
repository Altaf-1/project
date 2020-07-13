<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maggie extends Model
{
    protected $fillable=[
        'name',
        'price',
        'size'
    ];
}
