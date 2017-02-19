<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table    = 'lion_cities';
    protected $fillable = ['name_en', 'name_ar', 'governorte_id'];
}
