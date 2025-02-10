<?php 

$carPrice = 1000;

echo "this is the price of my car = " . $carPrice;
// variable types
$name = "John";
$age = 25;
$weight = 65.5;
$isMale = true;
$friends = array("Jane", "Jacob", "Jack");
$friends = ["Jane", "Jacob", "Jack"];
$friends = ["Jane", "Jacob", "Jack", 25, 65.5, true];
$data;

var_dump($data);
var_dump($name, $age, $weight, $isMale, $friends . "<br>");

// object in php
class person {
    var $name;
    function addName($changeName) {
        global $name;
        $name = $changeName;
        echo "this is the name of the person = " . $changeName;
    }
}

$newPerson = new person;
$newPerson->addName("pobi");

// string operations
$song = "agar tum sath ho ya na ho";
echo strpos("hello world", "world");
echo strlen($song);
echo strrev($song . '<br>');
echo str_replace("agar", " changing word", $song);


// math operations
echo (pi());
echo (min(0, 150, 30, 20, -8, -200));
echo (max(0, 150, 30, 20, -8, -200));
echo (abs(-6.7));
echo (sqrt(64));
echo (round(0.60));
echo (rand(10, 100));

//php constants
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
// consttants array
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);

echo cars[0];
var_dump(cars);

//local varialbe & global variable
//local varialbe = direct varialbe declear with $ sign
//global varialbe = constant declear with define function 


//php operators
//Arithmetic operators
$x = 10;
$y = 6;
echo ($x + $y);
echo ($x - $y);
echo ($x * $y);
echo ($x / $y);
echo ($x % $y);
echo ($x ** $y);

//Assignment operators  =, +=, -=, *=, /=, %=, .=
$x = 10; 
echo $x; //output is 10
$x += 20; //output is 30
echo $x; //output is 30
$x -= 20; //output is 10
echo $x; //output is 10
$x *= 20; //output is 200
echo $x; //output is 200
$x /= 20; //output is 10
echo $x; //output is 10
$x %= 20; //output is 10
echo $x; //output is 10
$x .= 20; //output is 1020
echo $x; //output is 1020

//Comparison operators ==, ===, !=, !==, >, <, >=, <=
$x = 100;
$y = "100";
var_dump($x == $y); //output is true
var_dump($x === $y); //output is false
var_dump($x != $y); //output is false
var_dump($x !== $y); //output is true
var_dump($x > $y); //output is false
var_dump($x < $y); //output is false
var_dump($x >= $y); //output is true
var_dump($x <= $y); //output is true

//Increment/Decrement operators ++$x, $x++, --$x, $x--
$x = 10;
echo ++$x; //output is 11
echo $x++; //output is 11
echo --$x; //output is 11
echo $x--; //output is 11


//php if else statement
$t = date("H");
echo 'this is the time = ' . $t;
var_dump($t); // 
if ($t < 2) {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
} 



?>