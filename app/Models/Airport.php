<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Airport extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'AIRPORT';
    protected $fillable = ['CODE', 'PAGE', 'NAME', 'AUTHOR', 'DATE', 'CONTENT'];
}
