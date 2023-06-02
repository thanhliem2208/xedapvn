<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableGallery extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_parent',
        'image',
        'hash',
        'name',
        'status',
    ];

    public function idParent()
    {
        return $this->belongsTo(TableProduct::class);
    }
}
