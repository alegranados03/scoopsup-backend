<?php

namespace App\Models\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaleDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'sale_details';
    protected $fillable = [
        'sale_id',
        'product_id',
        'quantity',
        'unit_price',
        'subtotal'
    ];

    public function sale()
    {
        return $this->belongsTo('App\Models\Sales\Sale', 'sale_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Products\Product', 'product_id');
    }
}
