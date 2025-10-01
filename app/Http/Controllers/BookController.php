<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show() {
        $books = Book::all();
        return view('books.list', ['books' => $books]);
    }


    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        
        Book::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'published_year' => $request->input('published_year'),
        ]);
        return redirect('/list');
    }

    public function delete($id){
        Book::destroy($id);
        return redirect('/list');
    }

    public function edit($id){
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required',
        ]);

        $book = Book::find($id);
        $book->update($request->all());
        return redirect('/list');
    }

}
