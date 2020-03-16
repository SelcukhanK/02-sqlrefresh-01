<php 
$titel = $_POST['titel'];
$afbeelding = $_POST['afbeelding'];
$artiest = $_POST['artiest'];
$album = $_POST['album']
$duur = $_POST['duur'];

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'muziek';



try {

    $connection = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'INSERT INTO `afspeellijst` (`titel`, `afbeelding`, `artiest`, `album`, `duur`)
            VALUES (:titel, :afbeelding, :artiest, :album, :duur)';

    $parameters = [
        'titel' => $titel,
        'afbeelding' => $afbeelding,
        'artiest' => $artiest,
        'album' => $album,
        'duur' => $duur  
    ];

    $statement = $connection->prepare($sql);

    $statement->execute($parameters);

    header('Location: index.php');
    
} catch (PDOException $e) {
    echo 'Fout bij database verbinding:<br>' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' .$e->getFile();
    exit;
}
?>