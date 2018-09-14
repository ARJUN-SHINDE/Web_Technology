<?php

include "./mysqlconfig.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "INSERT INTO college (user,pass) VALUES ('$user','$pass')";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('Record Successfully Inserted');</script>";
    header("location: ./index.php");
}else {
    echo "Insertion failed ".mysqli_error($conn);
}


?>