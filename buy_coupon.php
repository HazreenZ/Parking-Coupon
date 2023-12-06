<?php
include 'dbConnect.php';

// Attempt insert query execution
$id = $_POST['place'];
$sql = "INSERT INTO user (name, car_model, no_plate, id_place) VALUES ('$_POST[name]', '$_POST[car_model]', '$_POST[no_plate]', '$_POST[place]')";
$result = mysqli_query($conn, "SELECT * from place WHERE id_place=$id");
$row = mysqli_fetch_row($result);
if (!mysqli_query($conn, $sql)) {
    die('Error: ' .mysqli_error($conn));
}

// if($_POST['place'] == 1)
// {
//     $price = 5;
// }
// else if($_POST['place'] == 2)
// {
//     $price = 3;
// }
// else if($_POST['place']== 3)
// {
//     $price = 7;
// }

echo "<style type='text/css'>.fieldset-auto-width {display: inline-block;}</style><body style='background-color: rgb(253, 253, 253);'>";
echo "<div class='Header' style='background-color:#d6d6c2; padding-top:20px; padding-bottom:20px;' >";
echo "<div class='head' style='text-align: center;font-family:helvetica; text-transform:uppercase;  font-weight:bold;'>";
echo "<table><tbody><tr><td>";
echo "<a href = 'homepage.html' style='text-decoration:none; color:black;padding-right:20px; padding-left:20px'>HOME</a></td>";
echo "<td style='width:56%; padding-right: 500px;padding-left: 600px;'></td><td>";
echo "<a href = 'contact.html' style='text-decoration:none;color:black; padding-right:20px; padding-left:20px'>CONTACT US</a>";
echo "</td><td><a href = 'feedback.html' style='text-decoration:none;color:black;padding-right:20px; padding-left:20px'>FEEDBACK</a>";
echo "</td></tr></tbody></table></div></div>";
echo "<hr class='seperator'>";
echo "<div class='main' style='background-color:white;padding-top:20px; padding-bottom:20px; font-family: Arial, Helvetica, sans-serif;font:bold;'>";
echo "<div style='padding-top:100px; padding-bottom:100px'>";

echo "<center><h1 style='font-family: Arial, Helvetica, sans-serif;font:bold;'>Thank You</h1>";
echo "<fieldset class='fieldset-auto-width'><p>Receipt</p><table><td><p>Name :</p><p>Car Model :</p>";
echo "<p>Plate Number : </p><p>Place : </p><p>Price :</p></td>";
echo "<td><p>$_POST[name]</p><p>$_POST[car_model]</p><p>$_POST[no_plate]</p><p>$row[1]</p><p>RM $row[2]</p></table></fieldset>";
echo "<br><br><a href=coupon.php>Buy Another</a></center></div></hr></div></div>";

echo "<div  style='background-color:#d6d6c2; padding-top:100px; padding-bottom:100px;'></div>";
echo "<hr class='seperator'>";
echo "<div class='footer' style='left:0; bottom:0; width: 100%;text-align:center;'>";
echo "<p style='font-size:10px'>&copy; 2020 Primaclouds Solution. All rights reserved</p>";
echo "</div></hr>
</body>";


?>