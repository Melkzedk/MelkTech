<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "melktech";

$conn = new mysqli("localhost","root","","melktech");
if (!$conn){
echo "Database Connection Failed";
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM registerdb WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows ($result) > 0){
echo "Email Exists";
}
else{
$sql = ("INSERT INTO registerdb (fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')");
$result = mysqli_query($conn, $sql);
if ($result) {
header("Location: login.html");
}
}
?>