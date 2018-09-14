<?php

include './mysqlconfig.php';

$pass = $_POST['pass'];
$user = $_POST['user'];
$sql="INSERT INTO college (user,pass) VALUES ('$user','$pass')";

if(mysqli_query($conn,$sql)){
    echo "Done";
}else{
    echo "Insert Failed".mysqli_error($conn);
}

?>