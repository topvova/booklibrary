<?php

namespace App\Http\Controllers;

use App\Entities\Author;
use App\Repositories\AuthorRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Show authors with their books.
     *
     * @param Author $author
     * @param AuthorRepository $authorRepository
     * @param BookRepository $bookRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Author $author, AuthorRepository $authorRepository, BookRepository $bookRepository){

        return view('book.index', [
            'authors' => $authorRepository->showLatest(),
            'books' => $bookRepository->booksByAuthor($author)
        ]);
    }
}
