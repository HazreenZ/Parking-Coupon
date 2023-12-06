<?php

$host = "localhost" ;
$user = "root" ;
$password = "" ;
$db = "test" ;

mysql_connect($host, $user, $password) ;
mysql_connect_db($db) ;

if(isset($_POST['email'])){

	$email = $_POST['email'] ;
	$password = $_POST['password'] ;
	
	$sql = "select * from registration where email='".$email."'AND pass='".$password."' limit 1 " ;
	
	$result = mysql_query($sql) ;
	
	if(mysql_num_rows($result)==1) {
		echo "You have successfully login! " ;
		exit() ;
	}
	
	else{
		echo "Incorrect email or password" ;
		exit():
		}
}
	
	

?>