<?php

$engcode=$_GET['engcode'];
$eng_username=$_GET['eng_username'];
$eng_email=$_GET['eng_email'];
$eng_phone=$_GET['eng_phone'];

$servename = 'localhost';
$username= 'root';
$password = '';
$database = 'trackme';
$link=$con=mysqli_connect($servename, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql="insert into fieldeng(engcode,eng_username,eng_email,eng_phone)values('$engcode','$eng_username','$eng_email','$eng_phone)";
echo $sql;
if (mysqli_query($link,$sql))
{
	die('error in inserting records'.mysql_error);
}else
{
	echo "data inserted";
}
?>
	