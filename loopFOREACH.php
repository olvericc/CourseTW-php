<?php

$numbers = [2, 3, 5, 7, 8, 11];
/*
    // traversing an array using repetitive structure 'for'
    for ($i = 0; $i < count($numbers); $i++) { 
        echo $numbers[$i] . "<br>";
    }
*/

// traversing an array using repetitive structure 'foreach'

// printing key and value in array
foreach ($numbers as $key => $value) {
    echo "key: " .$key . " value: " . $value . "<br>";
}

echo "-------------------
<br>";

// printing only value in array
foreach ($numbers as $value) {
    echo "value: $value <br>";
}

echo "-------------------
<br>";

// printing only key in array
foreach ($numbers as $key => $value) {
    echo "key: $key <br>";
}