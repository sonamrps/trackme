<html>
    <head>
	   <title>connecting mysql server</title>
	   </head>
	   <body>
	      <?php
		  $servername='localhost';
		  $username='root';
		  $password=' ';
		  $database='trackme';
		  $conn=mysql_connect($servername,$username,$password,$database);
		  if(!$conn){
		  die('could not connect:'.mysql_error());
		  }
		  echo 'connected successfully';
		  mysql_close($conn);
		  ?>
		  </body>
		  </html>
		  
		  
		    
