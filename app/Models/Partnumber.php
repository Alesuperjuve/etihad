<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Partnumber extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'partnumber';
    protected $fillable     = ['nama'];
}
