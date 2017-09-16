<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'image',
        'is_available'
    ];
    /**
     * The authors for the book.
     */
    public function authors() {
        return $this->belongsToMany(Author::class, 'author_book');
    }
}
