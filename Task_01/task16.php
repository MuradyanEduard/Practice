<?php
/*16. Write a PHP script to extract the user name from the following email ID.
Sample String : 'rayy@example.com'
Expected Output : 'rayy'*/

$str = 'rayy@example.com';
$pos = strrpos($str, "@");

echo $str . "<br>";
echo substr($str, 0, $pos);