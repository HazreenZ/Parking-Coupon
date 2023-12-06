<!doctype html>
<html>

    <head>
        <title>Admin</title>
        <style>
            #viewtable {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-left:auto;
            margin-right:auto;
            font-weight: 400;
            }

            #viewtable td, #viewtable th {
            border: 1px solid #ddd;
            padding-top: 30px;
            padding-bottom: 30px;
            }

            #viewtable tr:nth-child(even){background-color: #f2f2f2;}

            #viewtable tr:hover {background-color: #ddd;}

            #viewtable th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: middle;
            background-color: #d6d6c2;
            color: black;
            font-weight: bold;
            }

            .btn{
                background-color: limegreen;
                color: white;
                text-decoration: none;
                border: 2px solid transparent;
                font-weight: bold;
                padding: 10px;
                border-radius: 5px;
                transition: transform .4s;
            }
            .btn:hover{
                background-color: green;
            }
            .btnlogout{
                background-color: #f9004d;
                color: white;
                width: 150px;
                text-decoration: none;
                border: 2px solid transparent;
                font-weight: bold;
                padding: 10px;
                border-radius: 5px;
                transition: transform .4s;
            }
            .btnlogout:hover{
                background-color: green;
            }
        </style>
    </head>

    <body style="background-color: rgb(253, 253, 253);">
        
        <div class="Header" style="background-color:#d6d6c2; padding-top:20px; padding-bottom:20px; " > 

            <div class="head" style="text-align: center;">

          <img src="download.png" alt="Logo">

            </div>

        </div>

        <hr class="seperator">

        <div class="main" style="text-align:center;font-family:helvetica; text-transform:uppercase;  font-weight:bold;" > 

            <div class="content1" style="background-image:url(image/back5.jpg); background-repeat:no repeat;background-size: cover; padding-top:50px; padding-bottom:50px ;">
                <table style="margin-left:auto;margin-right:auto;">
                    <tbody>

                        <tr >
                            <td style="padding: 20px;font-size:30px; color:rgb(44, 43, 43)">Admin Dashboard</td>
                        </tr>
                        
                    </tbody>
                    
                </table>
            </div>

            <div class="content2" style="padding-top: 0px; padding-bottom:20px;">
               
                    

                        <?php 
                            include 'dbconnect.php';
                            echo "<table border='2' id='viewtable'><tr><th>User Id</th><th>Name</th>";
                            echo "<th>Car Model</th><th>No. Plate</th><th>Place name</th><th>Price(RM)</th><th colspan=2>Action</th></tr>";
                            $result = mysqli_query($conn, "SELECT U.id,U.name,U.car_model,U.no_plate,P.name_place, P.price from user U ,place P WHERE U.id_place = P.id_place ORDER BY U.id");
                            while($row = mysqli_fetch_row($result))
                            {
                            
                                echo "<tr><td>$row[0]</td>";
                                echo "<td>$row[1]</td>";
                                echo "<td>$row[2]</td>";
                                echo "<td>$row[3]</td>";
                                echo "<td>$row[4]</td>";
                                echo "<td>$row[5]</td>";
                                echo "<td><a href=update.php?id=$row[0] class=btn>Update</a></td>";
                                echo "<td><a href=delete.php?id=$row[0] onclick=confirmation() class=btnlogout>Delete</a></td>";
                                echo "</tr>";   
                            
                            }
                            
                            echo "</table>";
                        
                        ?>
                        <script>
                            function confirmation(){
                                var result = confirm("Are you sure to delete?");
                                if(result){
                                    
                                }
                            }
                        </script>
            </div>

            <div class="content2" style="padding-top: 0px; padding-bottom:20px;">
               
                    

                        <?php 
                            echo "<table border='2' id='viewtable'><tr><th>Place ID</th><th>Name of Place</th>";
                            echo "<th>Price</th><th colspan=2>Action</th></tr>";
                            $result = mysqli_query($conn, "SELECT * from place ORDER BY id_place");
                            while($row = mysqli_fetch_row($result))
                            {
                            
                                echo "<tr><td>$row[0]</td>";
                                echo "<td>$row[1]</td>";
                                echo "<td>$row[2]</td>";
                                echo "<td><a href=updatePlace.php?id=$row[0] class=btn>Update</a></td>";
                                echo "<td><a href=deletePlace.php?id=$row[0] onclick=confirmation() class=btnlogout>Delete</a></td>";
                                echo "</tr>";   
                            
                            }
                            echo "<tr><td colspan=5><a href=addPlaceBtn.php><button class=btn style=width:150px; height:25px>Add New Place</button></a></td></tr>";
                            
                            echo "</table>";
                            mysqli_free_result($result);
                            mysqli_close($conn);
                        
                        ?>
                        <script>
                            function confirmation(){
                                var result = confirm("Are you sure to delete?");
                                if(result){
                                    
                                }
                            }
                        </script>
            </div>
            
            <a href="logout.php"><button class="btnlogout">Logout</button></a>
        </div>
        
        <hr class="seperator" style="margin-top: 50px;">

        <div class="footer" style="left:0; bottom:0; width: 100%;text-align:center;">
            
            <p style="font-size:10px">&copy; 2020 Primaclouds Solution. All rights reserved</p>
       
        </div>
      
        
                

    </body>

</html>