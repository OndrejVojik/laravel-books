@extends('layouts.admin')

@section('content')

@include('admin.authors.menu')

<h1>Create a new author</h1>

<form action="{{route('admin.authors.store')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="">
            Slug:
        </label>

        <input type="text" name="slug" value="{{old('slug',$author->slug)}}">
        
    </div>    
    
    <div class="form-group">
        <label for="">
            Name:
        </label>

        <input type="text" name="name" value="{{old('name',$author->name)}}">
        
    </div>

    <div class="form-group">
        <button>Save</button>

    </div>
</form>
    
@endsection