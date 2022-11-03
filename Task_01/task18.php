<?php

/*18. Write a PHP script to replace the first 'the' of the following string with 'That'.
Sample date : 'the quick brown fox jumps over the lazy dog.'
Expected Result : That quick brown fox jumps over the lazy dog.*/

$str = 'the quick brown fox jumps over the lazy dog.';

echo $str . "<br>";
echo preg_replace("/the/", "that", $str, 1);
