<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    use HasFactory;

    protected static function boot() {
        parent::boot();
        // We will generate auto slug before saving data
        static::creating(function ($data) {
            $data->slug = make_slug($data->title);
        });

        // We will generate auto slug on updating data
        static::updating(function ($data) {
            $data->slug = make_slug($data->title);
        });
    }
}
