<?php
function generateAllCharactersHtml(array $allCharacters): string {
    // below code uses count to check whether the code being passed is a multidimensional array
    // count vs count in recursive mode (COUNT_RECURSIVE) should not be equal if the array is multidimensional
    if(count($allCharacters) == count($allCharacters, COUNT_RECURSIVE)){
        return "Incorrect input! Try again:-)";
    }
    $characterHtml = "";
    foreach ($allCharacters as $character) {
        $characterHtml .= '<div class="individualCharacter">' . '<p>' . 'Name: ' . $character['name'] . '</p>' .
            '<p>Alignment: ' . $character['alignment'] . '</p>' .
            '<p>Weight: ' . $character['weight_kg'] . 'kg</p>' .
            '<p>Height: ' . $character['height_cm'] . 'cm</p>' .
            '<p>Place of Birth: ' . $character['place_of_birth'] . '</p>' . '</div>';
    }
    return $characterHtml;
}