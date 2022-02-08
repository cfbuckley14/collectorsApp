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
    <header>
        <h1>MARVEL CHARACTERS</h1>
    </header>
    <main>
        <?= $displayCharacterHtml?>
    </main>
    <footer>
        <h2 id="contact-me">Want to get in touch? Here's the best ways to...</h2>
        <div>
            <a href="https://www.linkedin.com/in/charlotte-buckley-93866416a/">
                <img class="social-icons" src="linked-in.png" alt="LinkedIn Icon"/>
            </a>
            <a href="https://www.instagram.com/charlotte.codes/">
                <img class="social-icons" src="instagram.png" alt="Instagram Icon"/>
            </a>
            <a href="https://github.com/cfbuckley14">
                <img class="social-icons" src="github.png" alt="GitHub Icon"/>
            </a>
            <a href="mailto:cfbuckley14@gmail.com" >
                <img class="social-icons" src="mail.png" alt="Email Icon"/>
            </a>
    </footer>
</body>

</html>
