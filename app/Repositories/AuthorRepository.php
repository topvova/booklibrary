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
    /**
     * Show latest 5 authors on index page.
     *
     * @return mixed
     */
    public function showLatest()
    {
        return $this->model->take(5)->latest()->get();
    }
}