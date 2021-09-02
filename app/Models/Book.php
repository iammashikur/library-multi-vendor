<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'cover_image',
        'title',
        'slug',
        'description',
        'num_of_page',
        'publisher',
        'writer',
        'status',
        'tags'
    ];

    protected static function boot() {
        parent::boot();
        // We will genearate auto slug before saving data
        static::creating(function ($data) {
            $data->slug = make_slug($data->title);
        });

        // We will genearate auto slug updating saving data
        static::updating(function ($data) {
            $data->slug = make_slug($data->title);
        });
    }
}
