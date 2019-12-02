


<html>
    <head>
	   <title></title>
	   </head>
	   <body>
	      <?php
		  $servername='localhost';
		  $username='root';
		  $password='';
		  $database='trackme';
		  $conn=mysqli_connect($servername,$username,$password,$database);
		  if($conn){
		  die('could not connect:'.mysqli_connect_error);
		  }
		  echo 'connected successfully';
		  mysql_close($conn);
		  ?>
		  </body>
		  </html>
		  
