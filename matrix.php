<?php

$numbers = [
    [1, 2, 3, 4],
    [5, 6, 7, 8, 9],
    [10, [11, 12, 13]],   
];

echo $numbers[0][2];
echo "<br>";
echo $numbers[2][1];
echo "<br>";
echo $numbers[2][1][2];
echo "<br>";

$course = ["php course - php fundamentals", 7.4, 40, true];

$courses = [
    "php" => [
    "name_course" => "php course fundamentals",
    "tool_version" => 7.4,
    "workload" => 40,
    "status" => true
    ],
    "java" => [
        "name_course" => "java course fundamentals",
        "tool_version" => 11.4,
        "workload" => 30,
        "status" => false 
    ]
];

echo $courses["php"]["name_course"];
echo "<br>";
echo $courses["java"]["name_course"];
echo "<br>";