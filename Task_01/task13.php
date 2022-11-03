<?php

/*13. Write a PHP script to :
a) transform a string all uppercase letters.
b) transform a string all lowercase letters.
c) make a string's first character uppercase.
d) make a string's first character of all the words uppercase.*/

$str = "lorem ipsum is simply dummy text of the printing and typesetting industry.";

echo strtoupper($str) . "<br>";
echo strtolower($str) . "<br>";
echo ucfirst($str) . "<br>";
echo ucwords($str) . "<br>";