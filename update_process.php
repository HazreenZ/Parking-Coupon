<?php
include 'dbConnect.php';
$id = $_GET['id'];
$update = "UPDATE user SET name='$_POST[username]',  car_model='$_POST[carModel]',  no_plate='$_POST[noPlate]', id_place='$_POST[place]' WHERE id=$id";

if(!mysqli_query($conn, $update))
{
    die('Error: '. mysqli_error($conn));
}
mysqli_close($conn);
echo "<script>
alert('Successfully Updated');
window.location.href='admin.php';
</script>";
?>