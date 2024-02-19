<?php
if(isset($_POST['sal'])) {
    $sal = $_POST['sal'];
    $da = $sal * 0.5;
    $hra = $sal * 0.1;
    $medical = $sal * 0.04;
    $gross_sal = $sal + $da + $hra + $medical;
    $insurance = $gross_sal * 0.07;
    $pf = $gross_sal * 0.05;
    $deduction = $insurance + $pf;
    $net_salary = $gross_sal - $deduction;
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Salary:<input type="text" name="sal" placeholder="Enter your Basic Salary:"><br>
        <input type="submit" value="Submit"><br>
        Your net payment will be <input type="text"value="<?php echo$net_salary;?>">
    </form>
</body>
</html>