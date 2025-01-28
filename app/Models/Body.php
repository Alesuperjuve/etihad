<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Body extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'body';
    protected $fillable     = ['nama'];
}
