<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Auto extends Model
{
    protected $table = 'auto';

    protected $fillable = ['model_name', 'cubic_capacity', 'max_speed', 'pic'];

    public function getCreatedAtAttribute($value){

        $date = new Carbon($value);

        $date = $date->format('d / m / Y');

        return $date;

    }


}
