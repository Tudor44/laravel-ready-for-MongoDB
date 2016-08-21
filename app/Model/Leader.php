<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = ['name','surname','jobTitle'];

}
