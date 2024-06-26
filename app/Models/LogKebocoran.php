<?php

namespace App\Models;

use App\Traits\FilterableByDates;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogKebocoran extends Model
{
    use HasFactory, FilterableByDates;

    protected $fillable = [
        'ppm'
    ];

    protected $cast = [
        'created_at' => 'datetime',
    ];
}
