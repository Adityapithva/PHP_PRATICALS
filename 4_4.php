<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Number: <input type="text" name="num" placeholder="Enter number for multiplication:"><br>
        <input type="submit" value="Submit"><br>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $num = $_POST['num'];
        echo"Displaying Multiplication Table:<br>";
        for($i=1;$i<=10;$i++){
            echo"$num x $i = ".($num*$i)."<br>";
        }
    }
    ?>
</body>
</html>