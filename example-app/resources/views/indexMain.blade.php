@extends('layout')

@section('title', 'Books')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <th>
                <a href="{{ route('books.show', $book) }}">{{ $book->title }}</a>
            </td>
            <td>
                <a href="{{ route('books.show', $book) }}">{{ $book->author_name }}</a>
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>
    <tr>
        <td>
            <a class="btn btn-primary" role="button" href="/authors">Authors</a>
        </td>
        <td>
            <a type="button" class="btn btn-primary" href="/books">Books</a>
        </td>
    </tr>

@endsection
