@extends("movies.layout")

@section("content")

<h1>Lägg till en film</h1>

<form action="{{ route('movies.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="year">År</label>
        <input type="text" class="form-control" id="year" name="year">
    </div>
    <div class="form-group">
        <label for="poster">Länk till bild</label>
        <input type="text" class="form-control" id="poster" name="poster">
    </div>
    <button type="submit" class="btn btn-success">Spara film</button>
</form>

@endsection
