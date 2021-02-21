<?php

namespace App\Models\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'sales';
    protected $fillable = [
        'total',
        'sale_date',
    ];

    public function saleDetails()
    {
        return $this->hasMany('App\Models\Sales\SaleDetail','sale_id');
    }
}
