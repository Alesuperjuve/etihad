<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Radius extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'radius';
    protected $fillable     = ['nama'];
}
