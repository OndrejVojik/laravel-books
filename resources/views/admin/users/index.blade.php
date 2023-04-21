@extends('layouts.admin')

@section('content')

<h1>List of users</h1>

<div id="root"></div>

@viteReactRefresh
@vite("resources/js/user-list/user-list.jsx")
    
@endsection