
<?php 
if(isset($_FILES['images'])){
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
}
$file_name=$_FILES['images']['name'];
$file_size=$_FILES['images']['size'];
$file_tmp=$_FILES['images']['tmp_name'];
$file_type=$_FILES['images']['type'];

move_uploaded_file($file_tmp,"uploads/".$file_name);

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
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="images" /><br><br>
        <input type="submit"/>
    </form>


</body>

</html>