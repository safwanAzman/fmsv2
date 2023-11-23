<?php

namespace App\Models\Siskop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiskopAccountProduct extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'SISKOP.ACCOUNT_PRODUCTS';
    protected $guarded = [];
    protected $casts   = [
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
        'deleted_at'    => 'datetime',
    ];
}
