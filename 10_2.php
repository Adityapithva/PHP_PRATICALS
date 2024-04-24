<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Name: <input type="text" name="n"><br>
        Password : <input type="password" name="pwd"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
session_start();
include("./db.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['n'];
    $password = $_POST['pwd'];
    $result = mysqli_query($conn,"select * from user where username = '$name' and password = '$password'");
    if($result){
        $_SESSION['username'] = $name;
        header('location:10_4.php');
        echo "Login Successfully...!";
    }else{
        echo "Your name or password is incorrect";
    }
}
?>