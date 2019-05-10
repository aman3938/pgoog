<?php
//this was done in 2016
($notDirect) or die("You can't access this page");

include_once './model/database.php';
session_start();
if($_SERVER["REQUEST_METHOD"]=='POST'){
     $username = $_POST["username"];
     $password = $_POST["password"];
  
     $query = "SELECT * FROM login where username='$username' and password='$password';";
     $result=mysqli_query($connectionId,$query) or die(mysqli_error($connectionId));
     
     $row = mysqli_fetch_assoc($result) ;
      
     $dbusername=$row['username'];
     $dbpassword=$row['password'];
    
  if($username==$dbusername && $password==$dbpassword){ 
      $_SESSION['loggedin'] = "true"; 
      header('location:./index.php');
   }
   
  else if($username != $dbusername ||  $password != $dbpassword)
      { 
       $_SESSION['loggedin'] = "false";
        header('location:./index.php');
        
   }
   
 }

closeConnection($connectionId);
?>