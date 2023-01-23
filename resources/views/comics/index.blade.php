@extends('layouts.app');

@section('page-title')
    Comics List
@endsection

@section('page-content')
    <h1> Comics List </h1>
    <a class="btn btn-warning" href="{{ route('comics.create') }}">Add Comic</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Thumb</th>
                <th scope="col">Title</th>
                <th scope="col">Serie</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td> <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" width="150"></td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary"> Info</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-info text-light"> Edit</a>
                        <form class="d-inline-block" action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Destroy</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
