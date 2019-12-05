?php


$subscription_code=$_GET['subscription_code'];
$plan_code=$_GET['plan_code'];
$customer_code=$_GET['customer_code'];
$subscription_start_time=$_GET['subscription_start_time'];
$subscription_end_time=$_GET['subscription_end_time'];
$validity=$_GET['validity'];
$no_of_subscription=$_GET['no_of_subscription'];
$annual_subscription_price=$_GET['annual_subscription_price'];
$payment_method=$_GET['payment_method'];
$servename = 'localhost';
$username= 'root';
$password = '';
$database = 'trackme';
$link =$con=mysqli_connect($servename, $username, $password, $database) or die("Connection failed");


echo "Connected successfully";
$sql="insert into purchase_subscription(subscription_code,plan_code,customer_code,subscription_start_time,subscription_end_time,validity,no_of_subscription,annual_subscription_price,payment_method)values('$subscription_code','$plan_code','$customer_code','$subscription_start_time','$subscription_end_time','$validity','$no_of_subscription','$annual_subscription_price','$payment_method')";
echo $sql;
if (mysqli_query($link,$sql))
{
	die('error in inserting records'.'mysqli_error');
}else
{
	echo "data inserted";
}
?>
	