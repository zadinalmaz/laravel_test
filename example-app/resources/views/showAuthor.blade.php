@extends('layout')

@section('name', $author->name)

@section('content')
    <a type="button" class="btn btn-secondary mt-3" href="{{ route('authors.index') }}">< Back to main page</a>
    <div class="card text-bg-light mt-3" style="max-width: 18rem;">
        <div class="card-header">Name: {{ $author->name }}</div>
        <div class="card-body">
            <li class="list-group-item">#Books amount: {{ $author->count }}</li>
        </div>
    </div>

    <form method="POST" action="{{ route('authors.destroy', $author) }}">
        <a type="button" class="btn btn-success mt-3" href="{{ route('authors.edit', $author) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger mt-3" type="submit">Delete</button>
    </form>

@endsection
