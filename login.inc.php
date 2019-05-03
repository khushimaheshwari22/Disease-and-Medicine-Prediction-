<?php

if(isset($_POST['submit']))
{
  include 'dbh.inc.php';
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  if(empty($username) || empty($password))
  {
   header("Location: ../home_page.php?login:empty");
   exit(); 
  }
  else
  {
    $sql="select * from patient_details where username='$username'";
    $result= mysqli_query($conn,$sql);
    $resultCheck= mysqli_num_rows($result);
    
    if($resultCheck<1) 
    {
     header("Location: ../home_page.php?login:error");
     exit();
    }
  }
}
else
{
 header("Location: ../home_page.php?login:error");
 exit();
}