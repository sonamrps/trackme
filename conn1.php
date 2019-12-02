<?php
$servename = 'localhost';
$username= 'root';
$password = '';
$database = 'trackme';
$con=mysqli_connect($servename, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<?php
/* Attempt MySQL server connection.Assuming you are running MySQL server with default setting(user 'root' with no password)*/
$link = mysqli_connect("localhost", "root", "","demo");

//check connection
if($link === false){
    die("ERROR: COULD NOT CONNECT." .mysqli_onnect_error());
}

//Attempt insert query execution
$sql= "INSERT INTO persons (eng_username, eng_phone,eng_email)VALUES
    ('Marker','9652478342','markerjas@mail.com')";
if (mysqli_query($link,$sql)){
    echo "Records inserted successfully.";
} else {
    echo "ERROR: could not able to execute $sql." . mysqli_error($link);
    
}
// close connection
mysqli_close($link);
?>





