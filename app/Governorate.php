<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
    protected $table    = 'lion_governorates';
    protected $fillable = ['name_en', 'name_ar', 'country_id'];
}
