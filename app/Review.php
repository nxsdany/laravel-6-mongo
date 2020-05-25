<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Review extends Eloquent
{
	protected $primaryKey = '_id';

    protected $fillable = [
        'rating', 'text', 'id_user', 'id_product'
    ];
    public function product()
	{
	    return $this->belongsTo(Product::class, 'id_product');
	}
}
