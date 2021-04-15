<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = "users";
    public $timestamps = false;
    protected $fillable =
    [
      'user_name',
        'user_age',
        'password',
    ];
}
