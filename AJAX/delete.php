<?php

include './mysqlconfig.php';

$user = $_POST['user'];
$sql="DELETE FROM college WHERE user='$user'";

if(mysqli_query($conn,$sql)){
    echo "Done";
}else{
    echo "Update Failed".mysqli_error($conn);
}

?>