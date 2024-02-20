<?php
$mat1 = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
$mat2 = array(
    array(9,8,7),
    array(6,5,4),
    array(3,2,1)
);
$ans = array();
for($i=0;$i<count($mat1);$i++){
    for($j=0;$j<count($mat1[0]);$j++){
        $ans[$i][$j] = 0;
        for($k=0;$k<count($mat1);$k++){
            $ans[$i][$j] += $mat1[$i][$k] * $mat2[$k][$j];
        }
    }
}
echo"Displaying resultant matrix:<br>";
for($i=0;$i<count($mat1);$i++){
    for($j=0;$j<count($mat1[0]);$j++){
        echo$ans[$i][$j]." ";
    }
    echo"<br>";
}