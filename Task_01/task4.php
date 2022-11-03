<?php
/*4. $x = [1, 2, 3, 4, 5];
Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
Sample Output :
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }*/

$x = [1, 2, 3, 4, 5];
print_r($x);
array_splice($x, 3, 1);
echo "<br>";
print_r($x);
