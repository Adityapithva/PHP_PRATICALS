<?php
$conn = new mysqli("localhost","root",12345,"collage");
if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}