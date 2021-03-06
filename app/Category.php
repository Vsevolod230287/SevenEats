<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public $timestamps = false;

    protected $fillable = [
    'name',
    'icon'
  ];

    public function restaurants()
    {
        return $this->belongsToMany('App\Restaurant', 'restaurant_category');
    }
}
