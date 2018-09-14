<?php

include './mysqlconfig.php';

$sql="SELECT * FROM college";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
td{
    width:100px;
    text-align:center;
}
table ,tr ,td{
    border:5px solid black;
}
button{
    background-color:red;
    color:white;
}
</style>
<script src="./jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#insert').click(function() {
        $('#insertform').show();
        $('#deleteform').hide();
        $('#updateform').hide();
    });
    $('#delete').click(function() {
        $('#insertform').hide();
        $('#deleteform').show();
        $('#updateform').hide();
    });
    $('#update').click(function() {
        $('#insertform').hide();
        $('#deleteform').hide();
        $('#updateform').show();
    });
});
$(document).ready(function() {
    $('#updateuser').keyup(function(){
    $.ajax({
        type:"POST",
        url:"./suggest.php",
        data:{'text':$('#updateuser').val()},
        async:false,
        success: function(data) {
            $('#suggestions').html(data);
        }
    });
});
});
</script>
<body>
<center>
    <table>
    <?php 
$result = mysqli_query($conn,$sql);
echo "<tr><td><h3>User</h3></td><td><h3>Password</h3></td><tr>";
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td><h3>".$row['user']."</h3></td><td><h3>".$row['pass']."</h3></td><tr>";
    }
}
?>
    </table>
    <br><br><br><br><br>
<table>
<tr>
<td><button id="insert" type="button"><h3>Insert</h3></button></td>
<td><button id="delete" type="button"><h3>Delete</h3></button></td>
<td><button id="update" type="button"><h3>Update</h3></button></td>
</tr>
<tr>
<td id="insertform" colspan="3" style="display:none">
<form method="POST" action="./insert.php">
    <br>
    <label for="user">USER:</label>
    <input type="text" name="user" id="user" required><br><br>
    <label for="pass">PASSWORD:</label>
    <input type="text" name="pass" id="pass" required><br><br>
    <button type="submit" style="background-color:#00A0F0;"><h3>Insert</h3></button>
</form>
</td>
</tr>
<tr>
<td id="deleteform" colspan="3" style="display:none">
<form method="POST" action="./delete.php">
    <br>
    <label for="user">USER:</label>
    <input type="text" name="user" id="user" required><br><br>
    <button type="submit" style="background-color:#00A0F0;"><h3>Delete</h3></button>
</form>
</td>
</tr>
<tr>
<td id="updateform" colspan="3" style="display:none">
<form method="POST" action="./update.php">
    <br>
    <label for="user">USER:</label>
    <input type="text" name="user" id="updateuser" required><br><br>
    <label for="pass">PASSWORD:</label>
    <input type="text" name="pass" id="pass" required><br><br>
    <button type="submit" style="background-color:#00A0F0;"><h3>Update</h3></button>
    <div id="suggestions"></div>
</form>
</td>
</tr></table>

    </center>
</body>
</html>