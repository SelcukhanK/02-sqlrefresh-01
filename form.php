<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Toevoegen</title>
</head>
<body>
    <h1>Voeg je track naar keuze toe</h1>
    <form action="process.php" method="post">
        <p>
            <label for="titel">Titel:</label>
            <input type="text" name="titel" value="">
        </p>
        <p>
            <label for="afbeelding">Afbeelding:</label>
            <input type="text" name="afbeelding" value="">
        </p>
        <p>
            <label for="artiest">Artiest:</label>
            <input type="text" name="artiest" value="">
        </p>
        <p>
            <label for="album">Album:</label>
            <input type="text" name="album" value="">
        </p>
        <p>
            <label for="album">Album:</label>
            <input type="text" name="album" value="">
        </p>
        <p>
            <label for="duur">Duur:</label>
            <input type="text" name="duur" value="">
        </p>
        <button type="submit">Toevoegen</button>
    </form>

</body>
</html>