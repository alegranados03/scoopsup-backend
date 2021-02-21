<?php

namespace App\Models\Buys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuyDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'buy_details';
    protected $fillable = [
        'buy_id',
        'product_id',
        'quantity',
        'unit_price',
        'subtotal'
    ];

    public function buy()
    {
        return $this->belongsTo('App\Models\Buys\Buy', 'buy_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Products\Product', 'product_id');
    }
}
