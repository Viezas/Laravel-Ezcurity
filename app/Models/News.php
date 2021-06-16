<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'img_url',
        'img_id',
        'published',
        'published_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
