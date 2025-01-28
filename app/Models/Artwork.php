<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Artwork extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'artwork';
    protected $fillable     = ['nama'];
}
