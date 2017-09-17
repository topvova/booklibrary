<?php

namespace App\Repositories;


use App\Entities\Author;

class AuthorRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    protected function model()
    {
        return Author::class;
    }
}