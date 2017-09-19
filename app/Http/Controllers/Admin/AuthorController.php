<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\AuthorRepository;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Show the authors list.
     *
     * @param AuthorRepository $authorRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(AuthorRepository $authorRepository)
    {
        $authors = $authorRepository->paginate(5);

        return view('admin.author.list', ['authors' => $authors]);
    }
    /**
     * Create a new author.
     *
     * @param Request $request
     * @param AuthorRepository $authorRepository
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, AuthorRepository $authorRepository)
    {
        $this->validate($request, [
            'name' => 'required|max:50|min:2',
            'surname' => 'required|max:50|min:2'
        ]);

        $author = $authorRepository->create($request->all());

        if ($author) {
            return redirect('/admin/authors');
        } else {
            return redirect('/admin/authors')->withErrors('Не вдалось створити.');
        }
    }
    /**
     * Edit the author's data.
     *
     * @param AuthorRepository $authorRepository
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(AuthorRepository $authorRepository, $id)
    {
        $author = $authorRepository->find($id);

        return view('admin.author.edit', ['author' => $author]);
    }
    /**
     * Update the author's data.
     *
     * @param Request $request
     * @param AuthorRepository $authorRepository
     * @param $id
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, AuthorRepository $authorRepository, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:50|min:2',
            'surname' => 'required|max:50|min:2'
        ]);

        $result = $authorRepository->update($request->except(['_method','_token']), $id);

        if ($result) {
            return redirect('admin/authors');
        } else {
            return redirect('admin/authors')->withErrors('Не вдалось оновити');
        }
    }

    /**
     * Delete the author.
     *
     * @param AuthorRepository $authorRepository
     * @param $id
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(AuthorRepository $authorRepository, $id)
    {
        $result = $authorRepository->delete($id);

        if ($result) {
            return redirect('admin/authors');
        } else {
            return redirect('admin/authors')->withErrors('Не вдалось видалити');
        }
    }
}