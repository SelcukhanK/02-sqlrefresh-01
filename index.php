<?php

$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'muziek';

try {
    $connection = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $connection->query('SELECT * FROM `afspeellijst`');

} catch (PDOException $e) {
    echo 'Fout bij database verbinding:<br>' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
    exit;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spotify</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="mijnafspeellijst">
    <h1 class="afspeellijst__title">Mijn Afspeellijst</h1>
    <a href="form.php" class="button-toevoegen">Track toevoegen</a>
    <div class="afspeellijst">
        <?php foreach ($statement as $afspeellijst) : ?>

            <div class="muziek" id="muziek <?php echo $afspeellijst?>">
                <h2 class="titel"<?php echo $afspeellijst['titel'] ?></h2>
                <br>
                <img src="<?php echo $afspeellijst['afbeelding'] ?>" class="album__image"/>
                <br>
                <em class="artistname">Artiest: <?php echo $afspeellijst['artiest'] ?></em>
                <br>
                <em class="albumname">Album: <?php echo $afspeellijst['album'] ?></em>
                <br>
                <em class="Length">Duur: <?php echo $afspeellijst['duur'] ?>min</em>
                <br>
                <a href="edit.php?id=<?php echo $afspeellijst['id'] ?>" class="edit-button">Bewerken</a>
                <a href="delete.php?id=<?php echo $afspeellijst['id'] ?>" class="delete-button">Verwijderen</a>

            </div>
        <?php endforeach ?>
    </section>
</body>
</html>
