<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        String: <input type="text" name="str" placeholder="Enter and string:"><br>
        <input type="submit" value="Submit"><br>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $str = $_POST['str'];
        $count = 0;
        while(isset($str[$count])){
            $count++;
        }
        echo "Length of given string is:".$count;
    }
    ?>
</body>
</html>