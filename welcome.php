<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>welcome</title>
<style>
body{
margin: 0px;
padding: 0px;
font-family: Arial,san-serif;
}
header{
position: fixed;
padding: 20px;
width: 100%;
height: 30px;
background: #22242A;
}
h2{
color: #fff;
margin: 0px;
text-transform: uppercase;
font-size: 22px;
font-weight: 900;
}
.logout_btn{
padding: 5px;
background: #198303;
float: right;
text-decoration: none;
margin-top: -30px;
margin-right: 40px;
border-radius: 2px;
font-size: 15px;
font-weight: 600;
color: #fff;
transition: 0.5s;
transition-property: background;
}
.logout_btn:hover{
backgroud: #0D9D8B;
}
.left_area{
		color: #fff;
		margin: 0px;
		text-transform: uppercase;
		font-size: 22px;
		font-weight: 900;
	}
	.left_area span{
		color: #1DC4E7;
	}
	.logout_btn{
		padding: 5px;
		background: #1983D3;
		text-decoration: none;
		float: right;
		margin-top: -30px;
		margin-right: 50px;
		border-radius: 2px;
		font-size: 18px;
		font-weight: 600px;
		color: #fff;
		transition: 0.5s;
		transition-property: background;
	}
	.logout_btn:hover{
		background: #0DE9D8;
	}
	.sidebar{
		background: #2F323A;
		margin-top: 70px;
		padding-top: 30px;
		position: fixed;
		left: 0px;
		width: 250px;
		height: 100%;
	}
	.sidebar .profile {
		width: 100%;
		height: 30%;
		border-radius: 100px;
		margin-bottom: 10px;
	}
	.sidebar h4{
		color: #ccc;
		margin-top: 0px;
		margin-bottom: 20px;
	}
	.sidebar a{
		color: #fff;
		display: block;
		width: 100%;
		line-height: 50px;
		text-decoration: none;
		padding-left: 40px;
		box-sizing: border-box;
		transition: 0.5s;
		transition-property: background;
	}
	.sidebar a:hover{
		background: #1983D3;
	}
	.content{
		margin-left: 250px;
		background: url(1.jpg) no-repeat;
		background-position: center;
		background-size: cover;
		height: 100vh;
	}
	.data{
		text-align: center;
	}
</style>
</head>
<body>
<header>
<h2>WELCOME  <?php echo $_SESSION['email']?></h2>
<div class="melk">
<a href="logout.php" class="logout_btn">LOGOUT</a>
</div>
</header>
<div class="sidebar">
	<center>
	<img src="images/pexels-vlada-karpovich-4050315.jpg" class="profile" alt="">
	<h4>DEVELOPER</h4>
	</center>

	<a href="#">HOME</a>
	<a href="view.php">VIEW</a>
	<a href="delete.php" target="_blank">CANCEL</a>
	<a href="update.php" target="_blank">UPDATE</a>
	</div>
	<div class="content"></div>

	<div class="data">
	<br><br>

</body>
</html>