<?php 
$name=$_POST['name'];
$phno=$_POST['phno'];
$email=$_POST['email'];

$conn=new mysqli('localhost','root','','form');
if($conn->connect_error)
{
	die('Connection Failed : '.$conn->connct_error);
}
$sql="INSERT INTO registration(name,phno,email) VALUES ('$name','$phno','$email')";

if($conn->query($sql)===TRUE)
{
	echo "new record created successfully";
}
else
{
	echo "error" . $sql ."<br>" .$conn->error;
}
$conn->close();




 ?>