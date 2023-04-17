<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){

        $crime_books = Book::where('category_2_id', 12)
            ->orderBy('publication_date', 'desc')
            ->limit(10)
            ->with('authors')
            ->get();

            $crime_books->loadMissing(['authors', 'publishers']);

        return view('index.index', compact('crime_books'));
    }

    // public function rateBook(Request $request, $book_id){
    //     $rating = new Rating;
    //     $rating->book_id = $book_id;
    //     $rating->user_id = Auth::user()->id;
    //     $rating->value = $request->post('value');
    //     $rating->save();
    // }
}
