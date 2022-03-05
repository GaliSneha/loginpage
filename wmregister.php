<?php
$conn=mysqli_connect('localhost','root','','contactsapp');

$email=$_POST['email'];
$password=$_POST['Password'];

$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);


   $sqlquery="insert into `usersdata`(`email`,`password`) values ('$email','$password')";
   $result1=mysqli_query($conn,$sqlquery);
   header("Location:WNpage.html");
  

?>