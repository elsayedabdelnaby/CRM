<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table    = "lion_countries";
    protected $fillable = ['name_en', 'name_ar'];
}
