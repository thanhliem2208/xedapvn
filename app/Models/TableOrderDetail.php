<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableOrderDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_order',
        'id_product',
        'quantity',
        'name',
        'code_product',
        'price',
        'price_sale',
        'color',
        'size',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'double',
        'price_sale' => 'double',
    ];

    public function idOrder()
    {
        return $this->belongsTo(TableOrder::class);
    }
}
