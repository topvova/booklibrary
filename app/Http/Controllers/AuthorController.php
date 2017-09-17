<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Show authors with their books.
     *
     * @param $id
     * @param AuthorRepository $authorRepository
     * @param BookRepository $bookRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id, AuthorRepository $authorRepository, BookRepository $bookRepository)
    {
        $author = $authorRepository->find($id);

        return view('book.index', [
            'authors' => $authorRepository->all(),
            'books' => $bookRepository->booksByAuthor($author)->paginate(5)
        ]);
    }
}
