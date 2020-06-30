<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 14-Jun-20
 * Time: 1:59 PM
 */
if (isset($_POST['submit'])){
    $num = $_POST['number'];


$unit = $_POST['number'];
$bill = 0;

if($unit > 0 && $unit <= 50) {
    $bill += $unit * 50;
} elseif($unit > 50 && $unit <= 150) {
    $bill += 50 * 50;
    $bill += ($unit - 50) * 75;
} elseif($unit > 150 && $unit <= 250) {
    $bill += 50 * 50;
    $bill += 100 * 75;
    $bill += ($unit - 150) * 120;
} else {
    $bill += 50 * 50;
    $bill += 100 * 75;
    $bill += 100 * 120;
    $bill += ($unit - 250) * 150;
}

$surcharge = $bill * (20/100);

$total = $bill + $surcharge;
echo "The total bill is: " . $total;

// switch ($num){
//     case 50:
//         $result1 = 50 * $num;
//         $sum += $result1;
//     case 100:
//         $result2 = 75 * $num;
//         $sum += $result2;
//     case 100:
//         $result3 = 120 * $num;
//         $sum += $result3;
//     case $num > 250:
//         $result4 = 150 * $num;
//         $sum += $result4;
//         echo "The sum is: ".$sum;
//         break;
// }
}
?>
<html>
<head>
    <title>Electricity Unit</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="number" placeholder="Enter unit here...">
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
