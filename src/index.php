<?php
$input=$_POST['input'];
$changeTime= $_POST['time'];
$result;

if(isset($_POST['convert'])){
print_r($_POST);
    if($changeTime=="hours_to_min"){
$result=60*$input." min";
}

elseif($changeTime=="hours_to_sec"){
$result= (60*60)*$input." seconds";
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">


<input type="text" name="input"><br><br>

<input type="radio" id="" name="time" value="hours_to_min">
<label for="">hours to min</label><br>

<input type="radio" id="" name="time" value="hours_to_sec">
<label for="">hours to sec</label><br>

<input type="submit" name="convert" value="convert">


<p>
    <?php
    echo $result;
    ?>
</p>

</form>

  
</body>
</html>