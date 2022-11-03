<?php
/*15. Write a PHP script to extract the file name from the following string.
Sample String : 'www.example.com/public_html/index.php'
Expected Output : 'index.php'*/

$str = "www.example.com/public_html/index.php";
$pos = strrpos($str, "/") + 1;

echo $str . "<br>";
echo substr($str, $pos);
