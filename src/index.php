<!DOCTYPE html>

<head>
    <title> Calculate Electricity Bill</title>
</head>

<?php

$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}

function calculate_bill($units)
{
    $firstUnit = 3.50;
    $secondUnit = 4.00;
    $thirdUnit = 5.20;
    $fourthUnit = 6.50;

    if ($units <= 50) {
        $bill = $units * $firstUnit;
    } else if ($units > 50 && $units <= 100) {
        $temp = 50 * $firstUnit;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $secondUnit);
    } else if ($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $secondUnit);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $thirdUnit);
    } else {
        $temp = (50 * 3.5) + (100 * $secondUnit) + (100 * $thirdUnit);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $fourthUnit);
    }
    return number_format((float)$bill, 2, '.', '');
}
?>

<body>
    <div id="page-wrap">
        <h1>Calculate Electricity Bill</h1>

        <form action="" method="post" id="quiz-form">
            <input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            <input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
        </form>

        <div>
            <?php echo '<br />' . $result_str; ?>
        </div>
    </div>
</body>

</html>