<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Height extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'height';
    protected $fillable     = ['nama'];
}
