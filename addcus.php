<?php
if(isset($_POST['submit'])){


include("required/db_connection.php");
include("required/functions.php");
 

$emp_name=$_POST['name'];
$phone1=$_POST['contact'];
$password1=$_POST['password'];


$sql = "INSERT INTO details(name,contact,pass) 
VALUES ('$emp_name','$phone1','$password1')";

$result = mysqli_query($con, $sql);  

if($result!=NULL) {
        
    echo "New record created successfully";
    header('Location: index.php');
 
}
   else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
  mysqli_close($con);

}
?>