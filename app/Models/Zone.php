<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Zone extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'zone';
    protected $fillable     = ['nama'];
}
