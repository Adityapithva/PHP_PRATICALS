<?php
function countNotes($amount){
    $denominations = [100,50,20,10,5,2,1];
    $noteCount = 0;
    foreach($denominations as $denomination){
        $noteCount += intdiv($amount, $denomination);
        $amount %= $denomination;
    }
    return $noteCount;
}
$amount = 300;
echo "Smallest number of notes needed for Rs. $amount is: " . countNotes($amount);