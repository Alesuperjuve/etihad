<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class TipeAvion extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'tipeavion';
    protected $fillable     = ['tipe'];
}
