<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;

class Pegawai extends Model
{
    protected $connection   = 'mongodb';
    protected $collection   = 'pegawai';
    protected $fillable     = ['nama','pos','negara'];
}
