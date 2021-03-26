<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = 'auto';

    protected $fillable = ['name_model', 'cubic_capacity', 'max_speed', 'pic'];
}
