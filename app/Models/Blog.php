<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->hasMany(category::class);
    }
    public function comment()
    {
        return $this->hasMany(comment::class);
    }
    public function tag()
    {
        return $this->belongsToMany(blog_tag::class)->withTimestamps();
    }
}
