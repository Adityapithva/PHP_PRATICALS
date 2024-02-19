<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Subject 1 <input type="text" name="s1" placeholder="Enter marks of Subject 1:"><br>
        Subject 2 <input type="text" name="s2" placeholder="Enter marks of Subject 2:"><br>
        Subject 3 <input type="text" name="s3" placeholder="Enter marks of Subject 3:"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $s1 = $_POST['s1'];
        $s2 = $_POST['s2'];
        $s3 = $_POST['s3'];
        $total = $s1 + $s2 + $s3;
        $per = $total / 3;
        if($per >=85 && $per <=100){
            echo"Percentage:".$per."<br>Grade:AA<br>";
        }elseif($per >= 75 && $per <= 84){
            echo"Percentage:".$per." <br>Grade:AB<br>";
        }elseif($per >= 65 && $per <= 74){
            echo"Percentage:".$per." <br>Grade:BB<br>";
        }elseif($per >= 55 && $per <= 64){
            echo"Percentage:".$per." <br>Grade:BC<br>";
        }elseif($per >= 45 && $per <= 54){
            echo"Percentage:".$per." <br>Grade:CC<br>";
        }elseif($per >= 40 && $per <= 44){
            echo"Percentage:".$per." <br>Grade:CD<br>";
        }elseif($per >= 35 && $per <= 39){
            echo"Percentage:".$per."<br> Grade:DD<br>";
        }else{
            echo"Percentage:".$per." Grade:FF(Fail)<br>";
        }
    }
    ?>
</body>
</html>