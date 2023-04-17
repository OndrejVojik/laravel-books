@extends('layouts.admin')

@section('content')

@include('admin.authors.menu')

<h1>Authors</h1>

<table class="admin-table">
    <tbody>
        <thead>
            <tr>
                <th>#ID</th>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($authors as $author)
        <tr>
            <td>
                {{$author->id}}
            </td>
            <td>
                {{$author->name}}
            </td>
            <td>
                <a href="{{route('admin.authors.edit', $author->id)}}">Edit</a>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
    
@endsection