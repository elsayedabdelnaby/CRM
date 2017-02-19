<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table    = 'lion_areas';
    protected $fillable = ['name_en', 'name_ar', 'city_id'];
}
