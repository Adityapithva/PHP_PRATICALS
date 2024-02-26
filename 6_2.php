<?php
$string1 = 'hello';
if($string1 == strtolower($string1)){
    echo"$string1 is in lower case<br>";
}else{
    echo"$string1 is not in lower case<br>";
}
echo"Reversed string is:".strrev($string1)."<br>";
$string2 = '   Hello World     ';
echo "String without white spaces: " . trim($string2)."<br>";
echo"String after replacement:".str_replace('World','Everyone',$string2);