<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
$servename = 'localhost';
$username= 'root';
$password = '';
$database = 'trackme';
$conn=mysqli_connect($servename, $username, $password, $database);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
    </body>
    
    
   <?php 
   
    $sql = "SELECT * from fieldeng";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        echo "Eng phone is : " . $row["eng_phone"]. " -user Name: " . $row["eng_username"]. " " . $row["eng_password"]. "<br>";
        echo "Eng Email is : " . $row["eng_email"] . "eng city: " . $row["eng_city"]." "."<br>";
}
    
} else {
    echo "0 results";
}
$conn->close();
    ?>
    <?php
/* Attempt MySQL server connection.Assuming you are running MySQL server with default setting(user 'root' with no password)*/
$link = mysqli_connect("localhost", "root", "","trackme");

//check connection
if($link === false){
    die("ERROR: COULD NOT CONNECT." .mysqli_connect_error());
}

//Attempt insert query execution
$sql= "insert into fieldeng (eng_username, eng_phone,eng_email)VALUES
    ('Marker','9652478342','markerjas@mail.com')";

$sql="insert into fieldeng(eng_username,eng_phone,eng_email)VALUES
         ('sam','7654325912','samjosh@mail.com')";
   

if (mysqli_query($link,$sql)){
    echo "Records inserted successfully.";
} else {
    echo "ERROR: could not able to execute $sql." . mysqli_error($link);
    
}
// close connection
mysqli_close($link);
?>


</html>

