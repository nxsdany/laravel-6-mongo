<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
	protected $primaryKey = '_id';

    protected $fillable = [
        'name', 'price'
    ];
    public function reviews()
    {
    	return $this->hasMany(Review::class, 'id_product');
    }
}
