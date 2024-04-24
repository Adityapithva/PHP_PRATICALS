<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Id: <input type="text" name="id"><br>
        Name: <input type="text" name="n"><br>
        Contact Number: <input type="tel" name="cn"><br>
        Email:<input type="email" name="e"><br>
        Date of Birth: <input type="date" name="dob"><br>
        Blood Group: <input type="text" name="bg"><br>
        Favourite Languages:  <br>
        <input type="checkbox" name="favl[]">Java <br>
        <input type="checkbox" name="favl[]">C++  <br>
        <input type="checkbox" name="favl[]">Python <br>
        <input type="checkbox" name="favl[]">C <br>
        Countries Visited: <br>
        <select name="countries[]" multiple required>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="China">China</option>
            <option value="Russia">Russia</option>
        </select><br>
        <input type="submit" value="Insert into Table">
    </form>
</body>
</html>
<?php
$conn = new mysqli("localhost","root",12345,"collage");
if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fav = implode(",",$_POST['favl']);
    $country = implode(",",$_POST['countries']);
    $sql = "INSERT INTO employee VALUES('$_POST[id]','$_POST[n]','$_POST[cn]','$_POST[e]','$_POST[dob]','$_POST[bg]','$fav','$country')";
    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }else{
        echo "Error:".$sql."<br>".$conn->error;
    }
}
?>