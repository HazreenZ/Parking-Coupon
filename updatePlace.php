<!doctype html>
<html>
    <head>
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
$result = mysqli_query($conn, "SELECT * from place WHERE id_place=$id");
$row = mysqli_fetch_row($result);
echo "<div style=margin-left:720px class=login-form>";
echo "<table>";
echo "<form action=update_place.php?id=$id method=POST>";
echo "<tr><td>ID: </td><td><input type=text name=id value='$row[0]' readonly></td></tr>";
echo "<tr><td>Name of Place: </td><td><input type=text name=placeName value='$row[1]'></td></tr>";
echo "<tr><td>Price (RM): </td><td><input type=number name=price value='$row[2]' step=any></td></tr>";
echo "<tr><td></td><td><input type=submit value=Update class=btn></td></tr>";
echo "</table>";
echo "</form>";
echo "</div>";

mysqli_free_result($result);
mysqli_close($conn);
?>

<div  style="background-color:#d6d6c2; padding-top:20px; padding-bottom:20px;"></div>

<hr class="seperator">

<div class="footer" style="left:0; bottom:0; width: 10%;text-align:center;">
    

</div>


</hr>