<?php
include 'dbConnect.php';
$id = $_GET['id'];
$update = "UPDATE place SET name_place='$_POST[placeName]', price='$_POST[price]' WHERE id_place=$id";

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