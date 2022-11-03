<?php
/*20. Write a PHP script to remove comma(s) from the following numeric string.
Sample String : '2,543.12'
Expected Output : 2543.12*/

$str = '2,543.12';

echo $str . "<br>";

echo floatval(str_replace(',', "", $str));

