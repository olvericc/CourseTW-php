<?php

# string

$name = "Eric Lopes Oliveira";

# int

$age = 19;

# float or double

$price = 45.90;

# bool

$mariage = true;

# how type is that variable

echo "the value of var name is: ";
echo gettype($name);
echo "<br>";

echo "the value or var age is: ";
echo gettype($age);
echo "<br>";

echo "the value of var price is: ";
echo gettype($price);
echo "<br>";

echo "the value of var bool is: ";
echo gettype($mariage);
echo "<br>";

# var_dump()
echo "---------------------------------- <br>";

echo "var_dump: ";
var_dump($name);
echo "<br>";

echo "var_dump: ";
var_dump($age);     // value
echo "<br>";

echo "var_dump: ";
var_dump($mariage);
echo "<br>";

echo "var_dump: ";
var_dump($price);
echo "<br>";

#update var type
echo "---------------------------------- <br>";

echo "the variable name is: ";
echo gettype($name);

$name = false;
echo "<br>";
echo "updated variable name is: ";
echo gettype($name);