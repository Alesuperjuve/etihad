<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Material extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'material';
    protected $fillable     = ['nama'];
}
