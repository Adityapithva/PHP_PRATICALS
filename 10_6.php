<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Password <input type="text" name="pwd"><br>
        <input type="submit" value="Chnage Password">
    </form>
</body>
</html>
<?php
session_start();
include("./db.php");
$n = $_SESSION['username'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pwd = $_POST['pwd'];
    $result = mysqli_query($conn,"update user set password = '$pwd' where username = '$n'");
    if($result){
        echo "Password Changed Successfully...!";
    }else{
        echo "Password Changing Failed...!";
    }
}
?>