<?php
session_start();
//require_once('connection.php');
$servername="localhost";
$username="root";
$password="";
$dbname="melktech";
$conn= mysqli_connect($servername,$username,$password,$dbname);

    if(isset($_POST['login'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM registerdb WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);

    if ($num==1) {
      $_SESSION['email']=$_POST['email'];
      header("location: welcome.php");


    }
    else{
      echo "Invalid Email or Password";
    }
  }
?>