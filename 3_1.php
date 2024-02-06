<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

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
        <input type="submit" value="submit">
    </form>
    <?php
    if ($_POST['select'] == 'add') {
        echo "Addition:" . $_POST['a'] + $_POST['b'];
    } elseif ($_POST['select'] == 'sub') {
        echo 'Subtraction:' . $_POST['a'] - $_POST['b'];
    } elseif ($_POST['select'] == 'mul') {
        echo 'Multiplication:' . $_POST['a'] * $_POST['b'];
    } else {
        echo "Division:" . $_POST['a'] / $_POST['b'];
    }
    ?>
</body>

</html>