<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Tolerance extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'tolerance';
    protected $fillable     = ['nama'];
}
