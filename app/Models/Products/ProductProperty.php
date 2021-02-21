<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductProperty extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'properties';

    public function products()
    {
        return $this->belongsToMany('App\Models\Products\Product','product_property','property_id','product_id');
    }
}
