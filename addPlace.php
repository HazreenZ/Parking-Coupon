<?php
include 'dbConnect.php';

// Attempt insert query execution
$sql = "INSERT INTO place (name_place, price) VALUES ('$_POST[namePlace]', '$_POST[price]')";
if (!mysqli_query($conn, $sql)) {
    die('Error: ' .mysqli_error($conn));
}
mysqli_close($conn);
echo "<script>
alert('Successfully Added');
window.location.href='admin.php';
</script>";
?>