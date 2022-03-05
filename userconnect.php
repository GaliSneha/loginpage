<?php
 $servername = "localhost";
$uname = "root";
$password = "";
$dbname = "details";

   $username=$_POST['name'];
   $usernum=$_POST['phone'];
   $usermail=$_POST['email'];
   $date=$_POST['Appointment request'];
   $time=$_POST['Morningdesire'];
   $bookid=$_POST['bookingid'];
   //database connection

   
   $conn = new mysqli($servername,$uname,$password,$dbname);
   if($conn->connect_error){
	   die('registration failed try again:'.$conn->connect_error);
   }
   elseif(1<2){
	   $stmt =$conn->prepare("INSERT INTO entry(username,usernum,usermail,date,time,bookid)
	   VALUES(?,?,?,?,?,?)");
	   for($i=0; $i<$userme; $i++){
	    $stmt->bind_param("sissss",$username,$usernum,$usermail,$date[$i],$time[$i],$bookid[$i]);

	   	   
	   $stmt->execute();
	   
	
	   }
		
   }
   else{
	   echo "enter correct value";
   }
    echo "registration successfull";
	 
   
   ?>