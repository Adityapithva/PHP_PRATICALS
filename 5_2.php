<?php
$a = array(5,4,3,2,1);
$n = count($a);
for($i=0;$i<$n-1;$i++){
    for($j=0;$j<$n-$i-1;$j++){
        if($a[$j] > $a[$j+1]){
            $t = $a[$j];
            $a[$j] = $a[$j + 1];
            $a[$j + 1] = $t;
        }
    }
}
echo"Displaying sorted array:<br>";
for($i=0;$i<$n;$i++){
    echo $a[$i]."<br>";
}