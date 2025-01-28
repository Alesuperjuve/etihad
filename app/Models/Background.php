<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Background extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'background';
    protected $fillable     = ['nama'];
}
