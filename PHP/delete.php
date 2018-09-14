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

$sql="DELETE FROM college WHERE user = '$user'";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('User Entry was Deleted');</script>";
    header('location:./index.php');
}else{
    echo "Deletion Failed".mysqli_error($conn);
}

?>

</html>