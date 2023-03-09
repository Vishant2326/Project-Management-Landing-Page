<?php 

include('required/db_connection.php');
include('required/functions.php');

if(isset($_POST['username'])){
    
    $name=$_POST['username'];
    $pass=$_POST['password'];   
   

$query = "SELECT * FROM details WHERE name='".$name."'AND pass='".$pass."'";
  	$result = db_one($query);
    print_r($result);
 	if (!empty($result)){
 		
 		header('Location: Admin.php');
 	}else{
 		header('Location: login.php');
 	}
 	
 }
?>
    
