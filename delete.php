<?php 
include("database/con_db.php");
$id = $_POST['id'];
// echo $id;
$sql = "UPDATE user SET is_delete = 'Y' WHERE user_id = " .$id ;
$result = mysqli_query($conn, $sql);	
?>