<?php

/*17. Write a PHP script to get the last three characters of a string.
Sample String : 'rayy@example.com'
Expected Output : 'com'*/

$str = 'rayy@example.com';
$pos = strrpos($str, ".") + 1;

echo $str . "<br>";
echo substr($str, $pos);
