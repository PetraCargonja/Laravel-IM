<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popis filmova</title>
</head>
<body>
    <form action="/movies?token=token123" method="post">
        <label for="name">Naziv</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="hitFilm">Hit film?</label>
        <input type="checkbox" name="hitFilm" id="hitFilm">
        <br>
        <label for="year">Godina</label>
        <input type="text" name="year" value="{{ old('year') }}">
        <br>
        <input type="submit" value="Spremi!">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
</body>
</html>