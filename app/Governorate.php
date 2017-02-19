<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    protected $table    = 'lion_governorates';
    protected $fillable = ['name_en', 'name_ar', 'country_id'];

    public function Country()
    {
        return $this->belongsTo('App\Country');
    }
}
