<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1><?= $viewParams['pageName']; ?></h1>
    <form>
        <label for="naziv"><?= $viewParams['nameTitle']; ?></label>
        <input type="text" name="naziv" id="naziv">

        <input type="submit" value="Spremi">
    </form>
</body>
</html>