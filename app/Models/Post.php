<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $perPage = 10;

    protected $fillable = [
        'title',
        'slug',
        'body',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    use HasFactory;
}
