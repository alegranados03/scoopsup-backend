<?php

namespace App\Models\Buys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buy extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'buys';
    protected $fillable = [
        'total',
        'buy_date',
    ];

    public function buyDetails()
    {
        return $this->hasMany('App\Models\Buys\BuyDetail','buy_id');
    }
}
