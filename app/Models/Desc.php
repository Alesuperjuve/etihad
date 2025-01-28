<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Desc extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'desc';
    protected $fillable     = ['nama'];
}
