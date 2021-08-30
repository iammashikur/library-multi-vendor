<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type'];

    protected static function boot() {
        parent::boot();
        // We will genearate auto slug before saving data
        static::creating(function ($data) {
            $data->slug = make_slug($data->name);
        });
    }
}
