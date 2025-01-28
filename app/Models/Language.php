<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Language extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'language';
    protected $fillable     = ['nama'];
}
