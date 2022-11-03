<?php
/*8. Write a PHP script to sort the following associative array :
["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"] in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key*/

$arr = ["Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40"];
asort($arr);
echo print_r($arr) . "<br>";
ksort($arr);
echo print_r($arr) . "<br>";
arsort($arr);
echo print_r($arr) . "<br>";
krsort($arr);
echo print_r($arr) . "<br>";
?>
