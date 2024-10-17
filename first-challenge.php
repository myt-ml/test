<?php
declare(strict_types=1);

function colorCode(string $color, string $name = "you"): array {

  $info =[
    'Red' => '2',
    'Green' => '5',
    'Blue' => '6',
    'Yellow' => '4',
    'Violet' => '7',
    'Orange' => '3',
    'Black' => '0',
    'White' => '9',
    'Brown' => '1',
    'Grey' => '8'
  ];
  

  // Return the color code and name in an array
  return [$info[$color], $name];
};

// Call the function and assign the returned values to variables
[$num, $name] = colorCode('Red', 'Mo');

echo("<h1>$num, $name </h1>");