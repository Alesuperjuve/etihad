<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Maskapai extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'maskapai';
    protected $fillable     = ['nama','kode','negara'];
}
