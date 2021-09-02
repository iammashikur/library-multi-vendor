<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_name',
            'name',
            'district_id',
            'division_id',
            'city_id',
            'address',
            'description',
    ];
}
