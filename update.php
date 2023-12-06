<!doctype html>
<html>
    <head>
        <title>Buy Coupon</title>
        <style>
            .login-form form table{
                height: 200px;
            }
            .login-form form table{
                width: 300px;
                max-width: 100%;
                position: relative;
            }
            .login-form form table select,input:first-child{
                display: inline-block;
                width: 150%;
                padding: 15px;
                outline: none;
            }
            .btn{
                background-color: limegreen;
                color: white;
                text-decoration: none;
                border: 2px solid transparent;
                font-weight: bold;
                padding: 10px 200px;
                border-radius: 5px;
                transition: transform .4s;
            }
            .btn:hover{
                background-color: green;
            }
        
        </style>
    </head>

    <body style="background-color: rgb(253, 253, 253);">
        <div class="Header" style="background-color:#d6d6c2; padding-top:20px; padding-bottom:20px;" > 

            <div class="head" style="text-align: center;font-family:helvetica; text-transform:uppercase;  font-weight:bold;">

               <table style="margin-left:auto; margin-right:auto">
                   <tbody>
                       <tr>
                           <td>
                               <h1>Update Place</h1>
                            </td>
                       </tr>
                   </tbody>
               </table>

            </div>

        </div>
</body>
</html>

<?php
include 'dbConnect.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT U.id, U.name, U.car_model, U.no_plate, P.name_place from user U , place P
WHERE U.id_place = P.id_place AND U.id = $id");
$result2 = mysqli_query($conn, "SELECT U.id_place, P.name_place FROM user U, place P WHERE id=$id AND U.id_place=P.id_place");
$row = mysqli_fetch_row($result);
$row2 = mysqli_fetch_row($result2);
echo "<div style=margin-left:650px class=login-form>";
echo "<form action=update_process.php?id=$id method=POST>";
echo "<table>";
echo "<tr><td>ID: </td><td><input type=text name=id value='$row[0]' readonly></td></tr>";
echo "<tr><td>Name: </td><td><input type=text name=username value='$row[1]'></td></tr><br>";
echo "<tr><td>Car Model: </td><td><input type=text name=carModel value='$row[2]'></td></tr>";
echo "<tr><td>No. Plate: </td><td><input type=text name=noPlate value='$row[3]'></td></tr><br>";
echo "<tr><td>Location: </td><td><select name='place' ><option value=$row[0]>$row2[1]</option>";
mysqli_free_result($result);
$result3 = mysqli_query($conn, "select * from place WHERE id_place NOT LIKE $row2[0]");

                                            while($row2 = mysqli_fetch_row($result3))
                                            {
                                                echo "<option value=$row2[0]>$row2[1]</option>";
                                            }
echo "</select></td></tr>";
echo "<tr><td></td><td><input type=submit value=Update class=btn></td></tr>";
echo "</table>";
echo "</form>";
echo "</div>";

mysqli_free_result($result2);
mysqli_close($conn);
?>

<div  style="background-color:#d6d6c2; padding-top:20px; padding-bottom:20px;"></div>

<hr class="seperator">

<div class="footer" style="left:0; bottom:0; width: 10%;text-align:center;">
    

</div>


</hr>