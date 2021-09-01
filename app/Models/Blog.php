<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',       
        'title',    
        'category_id',
        'body',
        'tags',  
        'is_premium',
    ];
    
    protected static function boot() {
        parent::boot();
        // We will genearate auto slug before saving data
        static::creating(function ($data) {
            $data->slug = make_slug($data->title);
        });

        static::updating(function ($data) {
            $data->slug = make_slug($data->title);
        });
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
