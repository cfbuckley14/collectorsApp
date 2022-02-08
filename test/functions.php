<?php
require '../functions.php';
use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{

    public function testSuccessGenerateCharacterHtml()
    {
        $input = [['id' => '1', 'name' => 'Spider-Man', 'alignment' => 'Hero', 'height_cm' => '178', 'weight_kg' => '75.75', 'place_of_birth' => 'Queens']];
        $expectedOutput = '<div><p>Name: Spider-Man</p><p>Alignment: Hero</p><p>Weight: 75.75kg</p><p>Height: 178cm</p><p>Place of Birth: Queens</p></div>';
        $actualOutput = generateCharacterHtml($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testFailureGenerateCharacterHtml()
    {
        $input = ['id' => '1', 'name' => 'Spider-Man', 'alignment' => 'Hero', 'height_cm' => '178', 'weight_kg' => '75.75', 'place_of_birth' => 'Queens'];
        $expectedOutput = "Incorrect input! Try again:-)";
        $actualOutput = generateCharacterHtml($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testMalformedGenerateCharacterHtml()
    {
        $input = "banana";
        $this->expectException(TypeError::class);
        $output = generateCharacterHtml($input);
    }
}