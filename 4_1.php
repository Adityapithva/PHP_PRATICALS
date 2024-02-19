<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $car = $_POST['car'];
    if($car == 'Safari' or $car == 'Nexon' or $car == 'Tigor' or $car == 'Tiago'){
        $company = 'Tata';
    }elseif($car == 'XUV700' or $car == 'XUV300' or $car == 'Bolero'){
        $company = 'Mahindra';
    }elseif($car == 'i20' or $car == 'Verna' or $car == 'Creta'){
        $company = 'Hyundai';
    }elseif($car == 'Swift' or $car == 'Alto' or $car == 'Baleno' or $car == 'Brezza'){
        $company = 'Suzuki';
    }else{
        $company  = 'Unknown';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Car : <input type="text" name="car" placeholder="Enter name of your car">
        <br>
        <input type="submit" value="Submit">
        <br>
        Company : <input type="text" value='<?php echo"$company"?>'>
    </form>
</body>
</html>
