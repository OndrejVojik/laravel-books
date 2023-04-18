@extends('layouts.main', ['current_menu_item' => 'homepage'])


@section('content')

    <h1>Laravel Books</h1>    
    <p>
        We are the best bookstore ever.
        You will keep coming back for more.
    </p>

    @guest
        <p>
            <a href="{{route('login')}}">Login</a> or <a href="{{route('register')}}">register</a> to begin rating books|
        </p>
    @endguest

    <h2>Crime books</h2>

    <div class="crime-books">
        @foreach ($crime_books as $book)
        <a 
        class="crime-books-book"
        href="{{route('books.show', $book->id)}}">
            <h3>{{$book->title}}</h3>
            Authors: {{ $book->authors->pluck('name')->join(', ') }}<br>
            Published by: {{ $book->publishers->pluck('name')->join(', ') }}
        </a>
        @endforeach
    </div>
    

    <div id="partners"></div>

    @viteReactRefresh
    @vite('resources/js/partners.jsx')

    <h2>Latest books</h2>
    <ul id="latest-books" class="latest-books"></ul>
    @vite("resources/js/latest-books.js")

@endsection
