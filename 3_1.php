<?php
$ans = ""; 
if(isset($_POST['select'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($_POST['select'] == 'add') {
        $ans = $a + $b;
    } elseif ($_POST['select'] == 'sub') {
        $ans =  $a - $b;
    } elseif ($_POST['select'] == 'mul') {
        $ans =  $a * $b;
    } elseif ($_POST['select'] == 'div') {
            $ans = $a / $b;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Simple Calculator</h1>
    <form action="3_1.php" method="post">
        A: <input type="text" name="a"><br>
        B: <input type="text" name="b"><br>
        choose an Option:
        <select name="select">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option><br>
        </select>
        <br>
        <input type="submit" value="submit"><br>
        Answer:<input type="text" value="<?php echo"$ans"?>">
    </form>
</body>

</html>