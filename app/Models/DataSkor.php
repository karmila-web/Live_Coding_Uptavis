<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSkor extends Model
{
    use HasFactory;

    protected $fillable = [
        'klub1',
        'skor_klub1',
        'klub2',
        'skor_klub2'
    ];
}
