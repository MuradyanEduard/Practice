<?php

/*7. Write a PHP script that inserts a new item in an array in any position.
Expected Output :
Original array :
1 2 3 4 5
After inserting '$' the array is :
1 2 3 $ 4 5
*/

$arr = [1, 2, 3, 4, 5];
echo print_r($arr) . "<br>";
array_splice($arr, 3, 0, "$");
echo print_r($arr) . "<br>";