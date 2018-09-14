<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
<?php

include "./mysqlconfig.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "UPDATE college SET pass='$pass' WHERE user='$user'";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('Update Successful');</script>";
    header('location: ./index.php');
}else{
    echo "Update Failed".mysqli_error($conn);
}


?>

</html>