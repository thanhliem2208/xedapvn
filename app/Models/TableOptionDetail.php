<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableOptionDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'id_option',
    ];

    public function idUser()
    {
        return $this->belongsTo(TableUser::class);
    }

    public function idOption()
    {
        return $this->belongsTo(TableOption::class);
    }
}
