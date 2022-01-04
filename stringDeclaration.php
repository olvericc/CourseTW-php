<?php

$string1 = "my value 1";

echo ($string1);
echo "<br>";

$string2 = 'my value 2';

echo ($string2);
echo "<br>";

// testing with ""

$name = "Eric";
$age = 19;

// $txt1 = "my name is " . $name . " and i have " . $age . " years old";

// another way...

$txt1 = "my name is $name and i have $age years old";

echo $txt1;
echo "<br>";

// testing with ''

// $txt2 = 'my name is $name and i have $age years old'; wrong
$txt2 = 'my name is ' . $name . ' and i have ' . $age . ' years old';

echo $txt2;
echo "<br>";

// testing with '' and {variable}
/*
    $txt3 = 'my name is {$name} and i have {$age} years old'; 

    echo $txt3;
    echo "<br>";
*/

// testing with "" using arrays

$courses = ["PHP", "Java", "C#"];
$school = ["UDEMY", "TREINAWEB", "UFBA"];

// $txt4 = "i studying " . $courses[0] . " on " . $school[1];

// another way
$txt4 = "i studying {$courses[2]} on {$school[0]}";

echo $txt4;
echo "<br>";