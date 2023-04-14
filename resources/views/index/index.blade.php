@extends('layout.main', ['current_menu_item' => 'homepage'])


@section('content')

    <h1>Laravel Books</h1>    
    <p>
        We are the best bookstore ever.
        You will keep coming back for more.
    </p>

    <div id="partners"></div>

    @viteReactRefresh
    @vite('resources/js/partners.jsx')

@endsection
