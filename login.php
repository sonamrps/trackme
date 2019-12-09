<?php
$db ="trackme";
$username =$_POST["username"];
$password =$_POST["password"];
$host = "localhost";

$conn=mysqli_connect($host,$username,$password,$db);
if($conn)
{
   $q = "select * from username where username like '$username'and password like'
    '$password'";
	$result = mysqli_query($conn,$q);
	if(mysqli_num_rows($result)>0)
	{ 
	echo "login successful....!";
		}else{
	echo "login failed.....!";
	
		}
}
?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	