<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Title extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'title';
    protected $fillable     = ['nama'];
}
