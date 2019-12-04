<?php


$cus_code=$_GET['cus_code'];
$eng_code=$_GET['eng_code'];
$registration_date=$_GET['registration_date'];
$servename = 'localhost';
$username= 'root';
$password = '';
$database = 'trackme';
$link =$con=mysqli_connect($servename, $username, $password, $database) or die("Connction failed");


echo "Connected successfully";
$sql="insert into meetingmaster(meeting_code,cus_code,eng_code,registration_date)values('$cus_code','$cus_code','$eng_code','$registration_date')";
echo $sql;
if (mysqli_query($link,$sql))
{
	die('error in inserting records'.'mysql_error');
}else
{
	echo "data inserted";
}
?>
	