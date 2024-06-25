<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogKebocoran extends Model
{
    use HasFactory;

    protected $fillable = [
        'ppm'
    ];

    protected $cast = [
        'created_at' => 'datetime',
    ];
}
