<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Term <input type="text" name="term" placeholder="Enter number of terms:"><br>
        <input type="submit" value="Submit"><br>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $t = $_POST['term'];
        $a = 0;
        $b = 1;
        echo"Displaying Fibonacci Series:";
        for($i=0;$i<$t;$i++){
            echo"$a ";
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }
    }
    ?>
</body>
</html>