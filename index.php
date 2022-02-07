<?php
$db = new PDO('mysql:host=db; dbname=collectorsapp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT * FROM `marvelscharacters`');
$query->execute();
$allFilms = $query->fetchALL();
print_r($allFilms);
?>