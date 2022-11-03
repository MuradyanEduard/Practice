<?php

/*6. Write a PHP script which decodes the following JSON string.
Sample JSON code :
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}
Expected Output :
Title : The Cuckoos Calling
Author : Robert Galbraith
Publisher : Little Brown*/

$json = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}
';

$obj = json_decode($json);

echo "Title: " . $obj->Title . "<br>";
echo "Author: " . $obj->Author . "<br>";
echo "Publisher: " . $obj->Detail->Publisher . "<br>";
