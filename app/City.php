<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

    protected $table    = 'lion_cities';
    protected $fillable = ['country_id', 'governorate_id', 'name_en', 'name_ar'];
    
    public function Country() {
        return $this->belongsTo('App\Country');
    }
    
    public function Governorate() {
        return $this->belongsTo('App\Governorate');
    }

}
