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
<head>
    <title>Marvel Characters</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="heading">
        <h1>MARVEL CHARACTERS</h1>
    </div>
    <div class="parentContainer">
        <p>
            <?= $displayCharacterHtml?>
        </p>
    </div>
</body>

</html>
