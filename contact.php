<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "melktech";

$conn = new mysqli("localhost","root","","melktech");
if (!$conn){
echo "Database Connection Failed!!";
}

$fname = $_POST['fname'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];
$sql = "INSERT INTO contact (fname,email,number,message) VALUES ('$fname','$email','$number','$message')";
$result = mysqli_query ($conn, $sql);
if ($result){
echo "message send successfully!!";
}
else{
echo "message not send";
}
?>