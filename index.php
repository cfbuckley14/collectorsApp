<?php
require_once './functions.php';

$db = new PDO('mysql:host=db; dbname=collectorsapp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT * FROM `marvelscharacters`');
$query->execute();
$allCharacters = $query->fetchALL();

$displayCharacterHtml = generateCharacterHtml($allCharacters);
?>

<html lang="en-GB">

    <div>
        <h1>Marvel Cinematic Universe Characters</h1>
    </div>

    <div>
        <p>
            <?= $displayCharacterHtml?>
        </p>
    </div>

</html>