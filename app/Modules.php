<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    protected $table    = 'lion_modules';
    protected $fillable = ['name_en', 'name_ar'];
}