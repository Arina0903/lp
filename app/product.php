<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
     public $table = "poducts";

    public $timestamps = false;

    protected $fillable = [
        'name', 'number', 'price',
    ];
}
