<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Show authors and books.
     *
     * @param AuthorRepository $authorRepository
     * @param BookRepository $bookRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(AuthorRepository $authorRepository, BookRepository $bookRepository)
    {
        return view('book.index', [
            'authors'=>$authorRepository->showLatest(),
            'books'=>$bookRepository->paginate(5)
        ]);
    }

    public function show(BookRepository $bookRepository, $id){

        return view('book.show', [
            'book'=> $bookRepository->find($id)
        ]);
    }
}
