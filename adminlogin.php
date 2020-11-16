<?php
 
 $conn=mysqli_connect('localhost','root','','prajaakeeya');
 
 if(isset($_POST["submit"]))
 {
	 $name = $_POST["name"];
	 $password = $_POST["password"];
	 
	$sql = mysqli_query($conn, " select count(*) as total from admin where name='".$name."' and password='".$password."' ")or die( mysqli_error($conn));
	$rw= mysqli_fetch_array($sql);
	if($rw['total']>0)
	{
		header("Location: admin.php");
	}
	else
	{
		echo "Name / Password incorrect please check";
	}
 }
?>

<!DOCTYPE html>
<html>
<head>
<tittle>Login form</tittle>
<style>
body
{
	margin: 0px;
	padding: 0px;
	background-size: cover;
}
.login-form
{
	width: 300px;
	padding: 20px;
	text-align: center;
	position: absolute;
	background: rgba(173, 255, 47, 0.8); 
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	overflow: hidden;
	border-radius: 05px;
}
.login-form img
{
	width: 50%;
	height: 50%;
}
.login-form input
{
	display: block;
	width: 100%;
	padding-left: 10px;
	height: 40px;
	boxsizing: border-box;
	outline: none;
	border: none;
	font-family: 'Ubuntu', sans-serif;
	font-size: 14px;
}
.text
{
	margin: 20px 0px;
	border-radius: 05px;
}
.button
{
	margin-top: 30px;
	margin-buttom: 20px;
	background: #487eb0;
	color: #fff;
	border-radius: 40px;
	cursor: pointer;
	transition: 0.8s;
}
.button:hover
{
	transform: scale(0.96);
}
.login-form a 
{
	text decoration: none;
	color: #000;
	font-family: 'Ubntu', sans-serif;
	padding: 10px;
	transition: 0.8s;
	dispaly: block;
}
.login-form a:hover
{
	background: rgba(0,0,0,0.3);
	color: #fff;
}
.login-form img {
width:150px;
height:150px;
margin-top:10px;
border:3px solid #CCCCCC;
border-radius:50%;
}
.h1{
text-shadow:3px 3px 3px #000000;
}
</style>
</head>
<body background="image\logback.jpeg"><br>
	<center class="h1"><h1><font color="red">....Only for Admin usage....</font></h1></center>
	<div class="login-form">
	<form method="post">
		<img src="image\user.png">
		<input type="text" name="name" placeholder="Admin Name" class="text">
		<input type="password" name="password" placeholder="Password" class="text">
		<input type="submit" name="submit" value="LOGIN" class="button"><br>
	</form>
	</div>

</body>
</html>