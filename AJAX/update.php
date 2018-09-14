<?php

include './mysqlconfig.php';

$pass = $_POST['pass'];
$user = $_POST['user'];
$sql="UPDATE college SET pass='$pass' WHERE user='$user'";

if(mysqli_query($conn,$sql)){
    echo "Done";
}else{
    echo "Update Failed".mysqli_error($conn);
}

?>