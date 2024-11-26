<?php
$mainString = "Hello, welcome to the world of PHP!";
$searchString = "world";
if (preg_match("/" . preg_quote($searchString, '/') . "/", $mainString)) {
    echo "The string '$searchString' is found in the main string.";
} else {
    echo "The string '$searchString' is NOT found in the main string.";
}
?>
