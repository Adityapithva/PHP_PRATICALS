<?php
echo "Random number between 1 and 100: " . rand(1,100)."<br>";
$decimal = 123;
echo "Decimal: $decimal <br>";
echo "Binary: " . decbin($decimal) . "<br>";
echo "Octal: " . decoct($decimal) . "<br>";
echo "Hexadecimal: " . dechex($decimal) . "<br>";
$angle = 45;
$angleRadians = deg2rad($angle);
echo "Angle: $angle degrees <br>";
echo "Sine: " . sin($angleRadians) . "<br>";
echo "Cosine: " . cos($angleRadians) . "<br>";
echo "Tangent: " . tan($angleRadians) . "<br>";