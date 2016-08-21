<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Promotion extends Model{

    protected $fillable = ['name','description'];

}
