<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname'
    ];
    /**
     * The books that belong to the author.
     */
    public function books() {
        return $this->belongsToMany(Book::class, 'author_book');
    }
}
