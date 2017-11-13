<?php

require "class.php";

$vardas = new vardas ('Eidvilas');
$vardas -> sakykVarda();

$myTest  = new Test();
$myTest  ->dayToday();
$myTest  ->storeToCookie();


// -- 4 --
var_dump ($myTest  -> isEven(5));
echo "<br />";

//  -- 6 --
$myTest  ->setLanguage("PL");
echo $myTest  -> language;
echo "<br />";

// -- 7 -- 

$array = [148, 244, 52, 49, 55, 19, 1];
var_dump($myTest  ->discount($array));
echo "<br />";

// -- 8 --

$myTest  ->storeRandom();

// -- 9 --

echo $myTest  -> glueText("this is a very simple sentence");
echo "<br />";

// -- 10 --

$a = $myTest -> textGen(array("red","green","blue","yellow","brown"));
var_dump ($a);



