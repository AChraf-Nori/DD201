<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@section('title', 'Livres List')</title>
    </head>
    <body>
        @extends('layouts')
        @section('content')
            <h2>LIVRES LIST!!</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>image</th>
                        <th>Titre</th>
                        <th>Pages</th>
                        <th>Description</th>
                        <th>Categorie_ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($livres as $livre)

                        <tr>
                            <td>{{ $loop->index }}</td>
                            <td>
                                <img width='40px' height='40px' src="{{ asset('storage/livres/' . $livre->image) }}" alt="image">
                            </td>
                            <td> {{ $livre->image }}</td>
                            <td> {{ $livre->pages }}</td>
                            <td> {{ $livre->description }}</td>
                            <td> {{ $livre->categorie_id }}</td>
                            <td>
                                <a href="{{ route('livre.create') }}">add</a>
                                <a href="{{ route('livre.edit', $livre->id) }}">edit</a>
                                <form action="{{ route('livre.destroy', $livre->id) }}" method='post'>
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit'>del</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endsection
    </body>
</html>