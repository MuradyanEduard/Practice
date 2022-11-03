<?php
/*14. Write a PHP script to check whether a string contains a specific string?
    Sample string : 'The quick brown fox jumps over the lazy dog.'*/

$str = 'The quick brown fox jumps over the lazy dog.';

if (strstr($str, 'fox')) {
    echo "Specific string found";
} else {
    echo "Specific string not found";
}
