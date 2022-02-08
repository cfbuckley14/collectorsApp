<?php
require_once './functions.php';

$db = new PDO('mysql:host=db; dbname=collectorsapp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT * FROM `marvelscharacters`');
$query->execute();
$allCharacters = $query->fetchALL();

echo '<h2>' . 'Marvel Cinematic Universe Characters' . '</h2>';

echo displayCharacters($allCharacters);