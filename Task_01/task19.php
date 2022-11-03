<?php
/*19. Write a PHP script to find the first character that is different between two strings.
String1 : 'football'
String2 : 'footboll'
Expected Result : First difference between two strings at position 5: "a" vs "o"*/


$String1 = 'football';
$String2 = 'footboll';

for ($i = 0; $i < strLen($String1); $i++) {
    if ($String1[$i] != $String2[$i]) {
        echo 'First difference between two strings at position ' . $i . ': "' . $String1[$i] . '" vs "' . $String2[$i] . '"';
    }
}