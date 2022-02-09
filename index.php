<?php
require_once './functions.php';

$db = new PDO('mysql:host=db; dbname=collectorsapp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT * FROM `marvelcharacters`');
$query->execute();
$allCharacters = $query->fetchAll();

$charactersHtml = generateAllCharactersHtml($allCharacters);
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
    <header>
        <h1>Marvel Characters</h1>
    </header>
    <main>
        <?= $charactersHtml?>
    </main>
</body>

</html>
