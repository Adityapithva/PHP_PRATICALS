<?php

// Get the current timestamp
$currentTimestamp = time();

// Display the current date and time in different formats
echo "Current date and time in different formats: <br>";
echo "1. Default format: " . date('Y-m-d H:i:s', $currentTimestamp) . "<br>";
echo "2. Date only: " . date('Y-m-d', $currentTimestamp) . "<br>";
echo "3. Time only: " . date('H:i:s', $currentTimestamp) . "<br>";
echo "4. Custom format: " . date('l, F j, Y \a\t g:i A', $currentTimestamp) . "<br>";

?>
