@extends("movies.layout")

@section("content")

<h1>{{ $movie->title }}</h1>
<p><strong>Årtal:</strong> {{ $movie->year }}</p>
<img src="{{ $movie->poster }}" alt="{{ $movie->title }}" style="max-width: 300px">

@endsection
