<html>
<head>
<title>admin</title>
<style>
*
{
	padding: 0;
	margin: 0;
}
h1
{
	font-family:Stencil;
	font-size: 60;
	color: orange;
}
table{
border:2px solid;
border_collapse: collapse;
width: 100%;
color: red;
font-family: monospace;
font-size: 20px;
text-align:left;
}
</style>
</head>
<body bgcolor="lightgreen">
<h1><center><font >.....Only Admin can use.....</font></center></h1><hr/>
<center>
<h2>....User Details.....</h2>
<table>
	<tr>
		<th>User_ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Username</th>
		<th>Username2</th>
		<th>Birthday</th>
		<th>Gender</th>
		<th>Mobile number</th>
		<th>Location</th>
		<th>Email</th>
		<th>Email2</th>
		<th>Password</th>
		<th>Password2</th>
		<th>Profile_picture</th>
		<th>Cover Picture</th>
	</tr>
<?php
	$conn=mysqli_connect('localhost','root','','prajaakeeya');
	if($conn-> connect_error){
		die("Connection failed:".$conn-> connection_error);
	}
			$sql="SELECT user_id,firstname,lastname,username,username2,birthday,gender,number,location,email,email2,password,password2,profile_picture,cover_picture from user";
			$result=$conn-> query($sql);
			
			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>". $row["user_id"] ."</td><td>". $row["firstname"] ."</td><td>". $row["lastname"] ."</td><td>". $row["username"] ."</td><td>". $row["username2"] ."</td><td>". $row["birthday"] ."</td><td>". $row["gender"] ."</td><td>". $row["number"] ."</td><td>". $row["location"] ."</td><td>". $row["email"] ."</td><td>". $row["email2"] ."</td><td>". $row["password"] ."</td><td>". $row["password2"] ."</td><td>". $row["profile_picture"] ."</td><td>". $row["cover_picture"] ."</td><td>";
					
				}
				echo "</table>";
			}
			else{
				echo "0 result";
			}
			$conn-> close();
?>	
</table>

<center>
<h2>....Post Details.....</h2>
<table>
	<tr>
		<th>Post_ID</th>
		<th>User_ID</th>
		<th>Post_image</th>
		<th>Content</th>
		<th>Created</th>
	</tr>
<?php
	$conn=mysqli_connect('localhost','root','','prajaakeeya');
	if($conn-> connect_error){
		die("Connection failed:".$conn-> connection_error);
	}
			$sql="SELECT post_id,user_id,post_image,content,created from post";
			$result=$conn-> query($sql);
			
			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>". $row["post_id"] ."</td><td>". $row["user_id"] ."</td><td>". $row["post_image"] ."</td><td>". $row["content"] ."</td><td>". $row["created"] ."</td><td>";
					
				}
				echo "</table>";
			}
			else{
				echo "0 result";
			}
			$conn-> close();
?>	
</table>

<center>
<h2>....Solutions Details.....</h2>
<table>
	<tr>
		<th>Solutions_ID</th>
		<th>Post_ID</th>
		<th>User_ID</th>
		<th>name</th>
		<th>Solution_content</th>
		<th>Image</th>
		<th>Created</th>
	</tr>
<?php
	$conn=mysqli_connect('localhost','root','','prajaakeeya');
	if($conn-> connect_error){
		die("Connection failed:".$conn-> connection_error);
	}
			$sql="SELECT solution_id,post_id,user_id,name,solution_content,image,created from solutions";
			$result=$conn-> query($sql);
			
			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>". $row["solution_id"] ."</td><td>". $row["post_id"] ."</td><td>". $row["user_id"] ."</td><td>". $row["name"] ."</td><td>". $row["solution_content"] ."</td><td>". $row["image"] ."</td><td>". $row["created"] ."</td><td>";
					
				}
				echo "</table>";
			}
			else{
				echo "0 result";
			}
			$conn-> close();
?>	
</table>

</body>
</html>