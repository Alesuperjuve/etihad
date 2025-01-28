<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Font extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'font';
    protected $fillable     = ['nama'];
}
