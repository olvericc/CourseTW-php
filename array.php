<?php 
// array lists
$languages = ["PHP", "Java", "C#"];

echo "programming languages most popular for devs: ";

echo "<br>";
echo "<br>";
echo $languages[0];
echo "<br>";
echo $languages[1];
echo "<br>";
echo $languages[2];

/*
    position that doesn't exists

    echo "<br>";
    echo $languages[3];

*/

// another sintax

$languages2 = array("PHP", "C#", "Java");
echo "<br>";

echo "another way for create array lists";

echo "<br>";
echo "<br>";
echo $languages2[0];
echo "<br>";
echo $languages2[1];
echo "<br>";
echo $languages2[2];

// insert 

$languages[3] = "Python";

var_dump($languages);
echo "<br>";

