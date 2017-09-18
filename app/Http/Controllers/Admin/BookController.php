<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\AuthorRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display all authors and books.
     *
     * @param BookRepository $bookRepository
     * @param AuthorRepository $authorRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(BookRepository $bookRepository, AuthorRepository $authorRepository)
    {
        $books = $bookRepository->paginate(5);
        $authors = $authorRepository->all();

        return view('admin.book.list', [
            'books' => $books,
            'authors' => $authors
        ]);
    }
    /**
     * Store a new book.
     *
     * @param Request $request
     * @param BookRepository $bookRepository
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, BookRepository $bookRepository)
    {
        $this->validate($request, [
            'title'=> 'required|max:255|min:5',
            'description'=>'required|min:50',
            'image'=>'required|mimes:jpeg,bmp,png',
            'authors'=>'required'
        ]);

        if (!$request->file('image')->isValid()) {
            return redirect('/admin/books')
                ->withErrors('Завантажте зображення');
        }

        $book = $bookRepository->create($request->all());
        $book->authors()->attach($request->authors);

        if ($book != false) {
            return redirect('/admin/books');
        } else {
            return redirect('/admin/books')
                ->withErrors('Не вдалось зберегти');
        }
    }
    /**
     * Show the form for editing the book.
     *
     * @param BookRepository $bookRepository
     * @param $bookId
     * @param AuthorRepository $authorRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(BookRepository $bookRepository, $bookId, AuthorRepository $authorRepository)
    {
        $book = $bookRepository->find($bookId);
        $authors = $authorRepository->all();

        return view('admin.book.edit', [
            'book' => $book,
            'authors' => $authors
        ]);
    }

    /**
     * Update the book.
     *
     * @param Request $request
     * @param BookRepository $bookRepository
     * @param $bookId
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, BookRepository $bookRepository, $bookId)
    {
        $this->validate($request, [
            'title'=> 'required|max:255|min:5',
            'description'=>'required|min:50',
            'image'=>'mimes:jpeg,bmp,png',
            'authors'=>'required'
        ]);

        $book = $bookRepository->find($bookId);

        $book->authors()->detach();
        $book->authors()->attach($request->authors);

        $result = $bookRepository->update($request->except(['authors','_method','_token']), $bookId);

        if ($result != false) {
            return redirect('/admin/books');
        } else {
            return redirect('/admin/books')
                ->withErrors('Не вдалось зберегти');
        }
    }

    /**
     * Delete the book.
     *
     * @param BookRepository $bookRepository
     * @param $bookId
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(BookRepository $bookRepository, $bookId)
    {

        $book = $bookRepository->find($bookId);
        $book->authors()->detach();

        $result = $bookRepository->delete($bookId);

        if ($result != false) {
            return redirect('/admin/books');
        } else {
            return redirect('/admin/books')
                ->withErrors('Не вдалось видалити');
        }
    }
}