<?php 

//Printing
echo "<h1>Hello World</h1>";

//Variables
$name = "Ramon";        //string
$age = 32;             //integer
$gpa = 3.83  ;          //decimal
$isGoodLooking = true;   //booean
$name = "Ortega";
echo "Your name is $name <br>";

//Casting and converting
echo ( (int)3.14 ). "<br>";
echo ( (int)"80" + (float)"60.5"). "<br>";
echo (intval("80") + floatval("60.5")), "<br>";

//Strings
$greeting = "Hello";
//indexes: 01234
echo strlen($greeting). "<br>";
echo $greeting[0]."<br>";
echo $greeting[-1]."<br>";
echo str_replace("l", "Z",$greeting)."<br>";
echo strchr($greeting, "ll")."<br>"; //finds the string then rest of string



?>

