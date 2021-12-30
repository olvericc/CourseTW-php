<?php

$films = ["star wars", "et", "star treck"];

$films2 = array ("mib 1", "american pie", "mama");

// four types of variables
$course = ["php course - php fundamentals", 7.4, 40, true];

// associative array

$course = [
    "name_course" => "php course - php fundamentals",
    "tool_version" => 7.4,
    "workload" => 40,
    "status" => true
];

echo $course["name_course"];
echo "<br>";
echo $course["tool_version"];
echo "<br>";
echo $course["workload"];
echo "<br>";
echo $course["status"];
echo "<br>";