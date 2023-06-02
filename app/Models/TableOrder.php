<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableOrder extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'id_payment',
        'code',
        'total_price',
        'id_order_status',
        'address',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'total_price' => 'double',
    ];

    public function idUser()
    {
        return $this->belongsTo(TableUser::class);
    }

    public function idPayment()
    {
        return $this->belongsTo(TablePayment::class);
    }

    public function idOrderStatus()
    {
        return $this->belongsTo(TableOrderStatus::class);
    }
}
