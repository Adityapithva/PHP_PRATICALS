<?php
session_start();
include("./db.php");
$n = $_SESSION['username'];
$result = mysqli_query($conn,"delete from employee where name='$n'");
if($result){
    echo "Record Deleted Successfully...!";
}else{
    echo "Record Deletion Failed...!";
}