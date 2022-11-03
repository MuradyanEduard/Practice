<?php

/*9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6
List of seven lowest temperatures : 60, 62, 63, 63, 64,
List of seven highest temperatures : 76, 78, 79, 81, 85,*/

$temprature = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];


asort($temprature);
$lowest = array_slice($temprature, 0, 5);
arsort($temprature);
$Highest = array_slice($temprature, 0, 5);

$avarage = (array_sum($Highest) + array_sum($lowest)) / (count($lowest) + count($Highest));

echo "Average Temperature is : " . $avarage . "<br>";
echo "List of five lowest temperatures : ";
foreach ($lowest as $value) {
    echo $value . " ";
}
echo "<br>";
echo "List of five lowest temperatures : ";
foreach ($Highest as $value) {
    echo $value . " ";
}




