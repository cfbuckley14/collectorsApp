<?php
require '../functions.php';
use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{

    public function testSuccessDisplayCharacters()
    {
        $input = [['id' => '1', 'name' => 'Spider-Man', 'alignment' => 'Hero', 'height_cm' => '178', 'weight_kg' => '75.75', 'place_of_birth' => 'Queens']];
        $expectedOutput = '<div><p>Name: Spider-Man</p><p>Alignment: Hero</p><p>Weight: 75.75kg</p><p>Height: 178cm</p><p>Place of Birth: Queens</p></div>';
        $actualOutput = displayCharacters($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testFailureDisplayCharacters()
    {
        $input = ['id' => '1', 'name' => 'Spider-Man', 'alignment' => 'Hero', 'height_cm' => '178', 'weight_kg' => '75.75', 'place_of_birth' => 'Queens'];
        $expectedOutput = "Incorrect input! Try again:-)";
        $actualOutput = displayCharacters($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testMalformedDisplayCharacters()
    {
        $input = "banana";
        $this->expectException(TypeError::class);
        $output = displayCharacters($input);
    }
}