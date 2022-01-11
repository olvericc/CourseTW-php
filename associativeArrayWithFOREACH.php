<?php

// associative array example
$courses = [
    "php" => [
        "course_name" => "Course of PHP fundamentals",
        "tool_version" => 7.4,
        "workload" => 40,
        "status" => true
    ],
    "java" => [
        "course_name" => "Course of Java fundamentals",
        "tool_version" => 11.4,
        "workload" => 30,
        "status" => false
    ],
    "c#" => [
        "course_name" => "Course of C# fundamentals",
        "tool_version" => 9.0,
        "workload" => 55,
        "status" => true
    ]
];

foreach ($courses as $specificCourse) {
    echo "------------------------------------------------ <br>";
    echo "course name: " . $specificCourse['course_name'];
    echo "<br>";
    echo "tool version: " . $specificCourse['tool_version'];
    echo "<br>";
    echo "workload: " . $specificCourse['workload'];
    echo "<br>";
    echo "status: " . $specificCourse['status'];
    echo "<br>";
}