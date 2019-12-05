<?php


$plan_code=$_GET['plan_code'];
$validity=$_GET['validity'];
$no_of_support=$_GET['no_of_support'];
$status=$_GET['status'];
$price_plan_wise=$_GET['price_plan_wise'];
$maximum_discount=$_GET['maximum_discount'];
echo $maximum_discount;
$servename = 'localhost';
$username= 'root';
$password = '';
$database = 'trackme';
$link =$con=mysqli_connect($servename, $username, $password, $database) or die("Connection failed");


echo "Connected successfully";
$sql="insert into subscriptionmaster(plan_code,validity,no_of_support,status,price_plan_wise,maximum_discount)values('$plan_code','$validity','$no_of_support','$status','$price_plan_wise','$maximum_discount')";
echo $sql;
if (mysqli_query($link,$sql))
{
	die('error in inserting records'.'mysqli_error');
}else
{
	echo "data inserted";
}
?>
	