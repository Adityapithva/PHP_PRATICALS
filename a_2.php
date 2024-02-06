<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying Details</title>
</head>
<body>
    <h1>Displaying Student Details</h1>
    <?php
    echo"Name:".$_POST['name']."<br>";
    echo"Enrollment Number:".$_POST['enroll']."<br>";
    echo"Current Sem:".$_POST['sem']."<br>";
    echo"Department:".$_POST['dept']."<br>";
    echo"Contact Number:".$_POST['no']."<br>";
    ?>
</body>
</html>