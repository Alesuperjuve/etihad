<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Placard extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'placard';
    protected $fillable     = ['nama','title'];
}
