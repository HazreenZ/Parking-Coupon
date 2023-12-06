<?php
include 'dbConnect.php';
$id= $_GET['id'];
$delete="delete from place where id_place=$id";
if(!mysqli_query($conn, $delete))
{
	die('Error:'.mysqli_error($conn));
}
$resetAI = mysqli_query($conn, "ALTER TABLE place auto_increment = 1");
mysqli_close($conn);
header("Location: admin.php");
exit();
?>