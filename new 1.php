<?php
$servername = "localhost";
$uname = "root";
$password = "";
$dbname = "details";

   $bookid=$_POST['bookingid'];
   $conn = new mysqli($servername,$uname,$password,$dbname);
   if($conn->connect_error){
	   die('registration failed try again:'.$conn->connect_error);
   }
   elseif(1<2){
	   $stmt =$conn->prepare("DELETE FROM entry WHERE bookid=$bookid);
	     
	   $stmt->execute();
	   
	
	   }
	   else{
	   echo "enter correct value";
   }
?>