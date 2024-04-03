<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["uname"];
    $pass = $_POST["pass"];
    if($name == "Aditya Pithva" && $pass == 12345){
        echo "Login Successfully...!";
    }else if($name == "Aditya Pithva" && $pass != 12345){
        echo "Your password is incorrect";
    }else{
        echo "Your name is incorrect";
    }
}