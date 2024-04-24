<?php
session_start();
include("./db.php");
$n = $_SESSION['username'];
$result = mysqli_query($conn,"select * from employee where name = '$n'");
echo "<h1>Home Page</h1>";
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    echo "Id: ".$row['id']."<br>";
    echo "Name: ".$row['name']."<br>";
    echo "Contact No.: ".$row['contact']."<br>";
    echo "Email: ".$row['email']."<br>";
    echo "Date of Birth: ".$row['dob']."<br>";
    echo "Blood Group: ".$row['bloodGroup']."<br>";
    echo "Favourite Language: ".$row['favl']."<br>";
    echo "Countries Visited: ".$row['countries']."<br><br>";
    echo"Delete profile:<a href='10_5.php'>Click here</a><br>";
    echo "Change Password: <a href='10_6.php'>Click here</a>";
}