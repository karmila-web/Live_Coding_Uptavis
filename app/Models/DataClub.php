<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataClub extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_klub',
        'kota_klub',
    ];



}


