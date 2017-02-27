<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    protected $table = 'lion_addresses';
    protected $fillable = ['country_id', 'governorate_id', 'city_id', 'area_id', 'street', 'building_no', 'floor_no', 'flat_no'];
    
    public function Country() {
        return $this->belongsTo('App\Country');
    }
    
    public function Governorate() {
        return $this->belongsTo('App\Governorate');
    }
    
    public function City() {
        return $this->belongsTo('App\City');
    }
    
    public function Area() {
        return $this->belongsTo('App\Area');
    }

}
