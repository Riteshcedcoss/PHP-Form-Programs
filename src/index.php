<?php
$area=0;
$perimeter=0;
$len="";
$wid="";
if(isset($_POST["calcBtn"]))
{
    $len= $_POST["len"];
    $wid= $_POST["wid"];
    
    //area 
    $area=$len*$wid;
 
    //perimeter 
    $perimeter=2*($len+$wid);
}
 

?>

<!DOCTYPE html>

<head>
    <title> Cal. Area And Peri.</title>
</head>


<body>
<div id="page-wrap">
        <form action="" method="post">
            <label for="len">Length:
                <input type="text" name="len" value="<?=$len?>"><br><br>
            </label>
            <label for="wid">Width:
                <input type="text" name="wid" value="<?=$wid?>"><br><br>
            </label>
            <button name="calcBtn" type="submit">Calculate Area and Perimeter</button>
        </form> 
        <h2>Area: <?=$area?></h2>
        <h2>Perimeter:<?=$perimeter?></h2>
    </div>
</body>

</html>