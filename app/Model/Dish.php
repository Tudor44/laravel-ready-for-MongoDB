<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = ['name','description'];
}
