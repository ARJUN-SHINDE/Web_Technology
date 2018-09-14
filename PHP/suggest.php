<?php

include "./mysqlconfig.php";

if(isset($_POST['text'])){
    $val = $_POST['text'];
}else {
    $val = "";
}

$sql = "SELECT user FROM college WHERE user LIKE '%".$val."%'";
$result = mysqli_query($conn,$sql);
$res = "";
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $res = $res.$row['user'].",";
    }
}

echo $res;

?>