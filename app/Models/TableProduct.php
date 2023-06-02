<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableProduct extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_category',
        'id_color',
        'id_size',
        'image',
        'slug',
        'name',
        'desc',
        'content',
        'code',
        'price',
        'price_sale',
        'discount',
        'quantity',
        'status',
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

    public function idCategory()
    {
        return $this->belongsTo(TableProductCategory::class);
    }

    public function idColor()
    {
        return $this->belongsTo(TableColor::class);
    }

    public function idSize()
    {
        return $this->belongsTo(TableSize::class);
    }
}
