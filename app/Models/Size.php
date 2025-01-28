<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Size extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'size';
    protected $fillable     = ['nama'];
}
