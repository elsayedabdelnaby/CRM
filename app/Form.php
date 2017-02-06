<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table    = "lion_forms";
    protected $fillable = ['name_en', 'name_ar'];
}
