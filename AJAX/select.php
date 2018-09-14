<?php

include './mysqlconfig.php';

$sql="SELECT * FROM college";

$result = mysqli_query($conn,$sql);

if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td><h3>".$row['user']."</h3></td><td><h3>".$row['pass']."</h3></td><tr>";
    }
}

?>