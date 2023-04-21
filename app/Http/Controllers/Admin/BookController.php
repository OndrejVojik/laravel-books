<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
        public function index()
    {
        $books = Book::orderBy('id','desc')
            ->limit(20)
            ->get();

            return view('admin.books.index', compact('books'));
    }

        public function edit($book_id)
    {
        $author = Book::findOrFail($book_id);

        return view('admin.authors.edit', compact(
            'book'
        ));
    }
}
