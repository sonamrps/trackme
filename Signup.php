<?php
require "conn5.php";
$Firstname=$_POST["Firstname"];
$Lastname=$_POST["Lastname"];
$Email=$_POST["Email"];
$Phoneno=$_POST["Phoneno"];
$cus_username=$_POST["username"];
$Password=$_POST["Password"];
$mysql_qry = "insert into customer(Firstname,Lastname,Email,Phoneno,cus_username,Password) values('$Firstname','$Lastname','$Email','$Phoneno','$cus_username','$Password')";
if($conn->query($mysql_qry) === True){
echo "insert successful";
if($conn->query($mysql_qry) === Empty){
	echo "Please insert the data";
}

else{
echo "Error: ".$mysql_qry."<br>".$conn->error;
}

$conn->close();
?>