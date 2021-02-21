<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'existance',
        'unit_price'
    ];


    public function saleDetails()
    {
        return $this->hasMany('App\Models\Sales\SaleDetail', 'product_id');
    }

    public function buyDetails()
    {
        return $this->hasMany('App\Models\Buys\BuyDetail', 'product_id');
    }

    public function properties()
    {
        return $this->belongsToMany('App\Models\Products\ProductProperty', 'product_property', 'product_id', 'property_id');
    }
}
