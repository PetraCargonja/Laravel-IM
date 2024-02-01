<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja videoteka</title>
</head>
<body>
    <form action="/movies?token=token123" method="post">
        <label for="name">Naziv</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br>
        <label for="hitFilm">Hit film?</label>
        <input type="checkbox" name="hitFilm" id="hitFilm">
        <br>
        <input type="submit" value="Spremi!">
        @csrf
    </form>
</body>
</html>