<?php
function test(&$a){
    $a++;
}
$x = 5;
test($x);
echo $x;

