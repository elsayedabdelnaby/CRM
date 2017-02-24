<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {

    protected $table = 'lion_areas';
    protected $fillable = ['country_id', 'governorate_id', 'city_id', 'name_en', 'name_ar'];

    public function Country() {
        return $this->belongsTo('App\Country');
    }

    public function Governorate() {
        return $this->belongsTo('App\Governorate');
    }

    public function City() {
        return $this->belongsTo('App\City');
    }

}
