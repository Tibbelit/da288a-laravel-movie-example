@extends("movies.layout")

@section("content")

<h1>Redigera: {{ $movie->title }}</h1>

<form action="{{ route('movies.update', ['movie' => $movie->id]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}">
    </div>
    <div class="form-group">
        <label for="year">År</label>
        <input type="text" class="form-control" id="year" name="year" value="{{ $movie->year }}">
    </div>
    <div class="form-group">
        <label for="poster">Länk till bild</label>
        <input type="text" class="form-control" id="poster" name="poster" value="{{ $movie->poster }}">
    </div>
    <button type="submit" class="btn btn-success">Uppdatera film</button>
</form>

@endsection
