<?php

namespace App\Repositories;

use App\Entities\Author;
use App\Entities\Book;

class BookRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    protected function model()
    {
        return Book::class;
    }

    /**
     * Show latest books by author
     *
     * @param $author
     * @return mixed
     */
    public function booksByAuthor(Author $author)
    {
        $books = $author->books();

        return $books->orderBy('id', 'desc');
    }
}