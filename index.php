<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 1);

function colorCode(array $colors): int {
    $resistorColors = [
        "Black" => 0,
        "Brown" => 1,
        "Red" => 2,
        "Orange" => 3,
        "Yellow" => 4,
        "Green" => 5,
        "Blue" => 6,
        "Violet" => 7,
        "Grey" => 8,
        "White" => 9
    ];

    $colorCode = "";
    
    $colorCode[0] = $resistorColors[$colors[0]];
    $colorCode[1] = $resistorColors[$colors[1]];
    for($i = 0; $i < $resistorColors[$colors[2]]; $i++) {
        $colorCode *= 10;
    }

    return (int)$colorCode;

}

echo (colorCode(["Red", "Violet", "Green"]));