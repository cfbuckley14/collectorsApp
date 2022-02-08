<?php
function displayCharacters(array $allCharacters): string {
    if(count($allCharacters) == count($allCharacters, COUNT_RECURSIVE)){
        return "Incorrect input! Try again:-)";
    }
    $displayCharacters = "";
    foreach ($allCharacters as $character) {
        $displayCharacters .= '<div>' . '<p>' . 'Name: ' . $character['name'] . '</p>' .
            '<p>' . 'Alignment: ' . $character['alignment'] . '</p>' .
            '<p>' . 'Weight: ' . $character['weight_kg'] . 'kg' . '</p>' .
            '<p>' . 'Height: ' . $character['height_cm'] . 'cm' . '</p>' .
            '<p>' . 'Place of Birth: ' . $character['place_of_birth'] . '</p>' . '</div>';
    }
    return $displayCharacters;
}
