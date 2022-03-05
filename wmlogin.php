<?php

$conn=mysqli_connect('localhost','root','','details');
$email=$_POST['email'];
$password=$_POST['Password'];
$query="select * from entry where usermail='$email' and password='$password'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count>0)
{
   session_start();
   $_SESSION['useremail']=$email;
   header("location:HNIpage.html");
}
else
{
    header("location:signinunsuccessfull.html");
}
?>
?>