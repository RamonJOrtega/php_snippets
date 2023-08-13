<?php 

//Printing
echo "<h1>Hello World</h1>";

//numbers
echo (2*3)."<br>";
echo(2**3)."<br>"; //2 cubed
echo(10 % 3)."<br>";
echo(1 + 2 * 3)."<br>"; //order of operations
echo(10 / 3.0). "<br>"; //ints and boules turns to doubles
echo "<br><br>";


//Variables
$name = "Ramon";        //string
$age = 32;             //integer
$gpa = 3.83  ;          //decimal
$isGoodLooking = true;   //booean
$name = "Ortega";
echo "Your name is $name <br><br>";

//Casting and converting
echo ( (int)3.14 ). "<br>";
echo ( (int)"80" + (float)"60.5"). "<br>";
echo (intval("80") + floatval("60.5")), "<br><br>";



//Strings
$greeting = "Hello";
//indexes: 01234
echo strlen($greeting). "<br>";
echo $greeting[0]."<br>";
echo $greeting[-1]."<br>";
echo str_replace("l", "Z",$greeting)."<br>";
echo strchr($greeting, "ll")."<br><br>"; //finds the string then rest of string





?>

