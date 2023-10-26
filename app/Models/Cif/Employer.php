<?php

namespace App\Models\Cif;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $connection = 'fms';
    protected $table   = 'CIF.Cust_Employer';
    protected $guarded = [];
}
