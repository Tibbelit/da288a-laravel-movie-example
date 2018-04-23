@extends("movies.layout")

@section("content")

<h1>Mina filmer</h1>

<ul class="list-group">
@foreach ($movies as $movie)
    <li class="list-group-item">
        <a href="/movies/{{ $movie->id }}">{{ $movie->title }} ({{ $movie->year }})</a>
        <form action="{{ route('movies.destroy', ['movie' => $movie->id]) }}" method="POST" style="float:right; margin-bottom:-5px; margin-top: -3px;">
            @csrf
            @method('DELETE')
            <input type="submit" value="Radera" class="btn btn-danger btn-sm">
        </form>
        <a href="/movies/{{ $movie->id }}/edit" class="btn btn-warning btn-sm" style="float:right;  margin: -3px 5px -5px 0;">Redigera</a>
    </li>
@endforeach
</ul>

@endsection
