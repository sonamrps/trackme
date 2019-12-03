<?php

$Cus_email=$_GET['Cus_email'];
$Cus_name=$_GET['Cus_name'];
$Customercode=$_GET['Cus_username'];

$servename = 'localhost';
$username= 'root';
$password = '';
$database = 'trackme';
$link=$con=mysqli_connect($servename, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql="insert into Customer(Cus_email,Cus_name,Customercode)values('$Cus_email','$Cus_name','$Customercode')";
echo $sql;
if (mysqli_query($link,$sql))
{
	die('error in inserting records'.mysql_error);
}else
{
	echo "data inserted";
}
?>
	
