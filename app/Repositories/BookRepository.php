<?php

namespace App\Repositories;


use App\Entities\Book;

class BookRepository
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
}