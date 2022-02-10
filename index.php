<?php
require_once './functions.php';

$db = new PDO('mysql:host=db; dbname=collectorsapp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if (isset($_POST['name']) && isset($_POST['alignment']) && isset($_POST['weight_kg']) && isset($_POST['height_cm']) && isset($_POST['place_of_birth'])) {
    $query = $db->prepare('INSERT INTO `marvelcharacters` (`name`, `alignment`, `weight_kg`, `height_cm`, `place_of_birth`) VALUES (:name, :alignment, :weight_kg, :height_cm, :place_of_birth);');
    $query->execute(['name' => $_POST['name'], 'alignment' => $_POST['alignment'], 'weight_kg' => $_POST['weight_kg'], 'height_cm' => $_POST['height_cm'], 'place_of_birth' => $_POST['place_of_birth']]);
}

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
        <section>
            <?= $charactersHtml?>
        </section>
        <section>
            <form method="POST" action= "index.php">
                <p>*Name: <input type="text" name="name"/></p>
                <p>*Alignment: <input type="text" name="alignment" required/></p>
                <p>*Weight (kg): <input type="text" name="weight_kg" required/></p>
                <p>*Height (cm): <input type="text" name="height_cm" required/></p>
                <p>*Place of Birth: <input type="text" name="place_of_birth" required/></p>
                <button type="submit" value="Submit">MARVELous addition!</button>
            </form>
        </section>
    </main>
</body>

</html>
