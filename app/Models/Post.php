<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Relationship OneToMany. Reverse
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongTo(Category::class);
    }

    /**
     * Relationship ManyToMany
     */
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Polymorphic Relationship
     */
    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }
}
