<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Pesawat extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'pabrikan';
    protected $fillable     = ['nama', 'negara'];
}
