<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Scale extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'scale';
    protected $fillable     = ['nama'];
}
