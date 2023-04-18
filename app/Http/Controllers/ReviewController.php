<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;

class ReviewController extends Controller
{
    public function reviewBook(Request $request, $book_id){
        $this->validate($request, [
            'text'=>'required|max:255'
        ]);

        $book = Book::findOrFail($book_id);

        $user_id = Auth::id();
        $review = Review::where([
            'book_id'=>$book_id,
            'user_id'=>$user_id
        ])->first();

        if(!$review){
            $review = new Review;
            $review->book_id=$book_id;
            $review->user_id=$user_id;
        }

        $review->text=$request->post('text');

        $review->save();

        session()->flash('success_message', 'Review was successfully saved');

        return redirect()->route('books.show', $book->id);
    }
}
