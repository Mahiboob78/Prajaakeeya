<?php
function time_stamp($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds seconds ago"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"one minute ago"; 
    }
   else
   {
   echo"$minutes minutes ago"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"one hour ago";
   }
  else
  {
  echo"$hours hours ago";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo"one day ago";
   }
  else
  {
  echo"$days days ago";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo"one week ago";
   }
  else
  {
  echo"$weeks weeks ago";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo"one month ago";
   }
  else
  {
  echo"$months months ago";
  }
 
   
}

else
{
if($years==1)
   {
   echo"one year ago";
   }
  else
  {
  echo"$years years ago";
  }

}
 
} 

?>
<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  to Prajaakeeya</title>
		<link rel="stylesheet" type="text/css" href="css/profiles.css">
	</head>

<body>
<?php include ('session.php');?>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="PRAJAAKEEYA"><b>PRAJAAKEEYA</b></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li>|</li>
				<li><a href="home.php" title="Home"><label>Home</label></a></li><li>|</li>
				<li><a href="profiles.php" title="Profile"><label class="active">Profile</label></a></li><li>|</li>
				<li><a href="settings.php" title="Settings"><label>Settings</label></a></li><li>|</li>
				<li><a href="logout.php" title="Log out"><button class="btn-sign-out" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
	
		<div id="clip2">
				<a href="updatecover.php" title="Change Cover Photo"><img src="<?php echo $row['cover_picture'] ?>"></a>	
		</div>	
		
		<div id="left-nav">
				
				<div class="clip1">

				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
				</div>
				
				<div class="user-details">
					<label><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></label>
					<br />
					<b>(<?php echo $username ?>)</b>
				</div>
		</div>
	
		<div id="right-nav">
			<h1>Share your thoughts</h1>
	<div>
			<form method="post" enctype="multipart/form-data">
				<textarea placeholder="Whats on your mind?" name="content" class="post-text" required></textarea>
				<input type="file" name="image" class="file">
				<button class="btn-share" name="Submit" value="Log out">Share</button>
			</form>
			
<?php
	include('includes/database.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$location="upload/" . $_FILES["image"]["name"];
									$user=$_SESSION['id'];
									$content=$_POST['content'];
									$time=time();
									
									$update=mysqli_query($conn,"INSERT INTO post (user_id,post_image,content,created)
									VALUES ('$id','$location','$content','$time') ") or die (mySQLI_error());

									}
										header('location:profiles.php');
									
									
									}
							}
?>
			
	</div>
	
		</div>
		

 	
		
<?php
	include("includes/database.php");
			$query=mysqli_query($conn,"SELECT * from user where user_id='$id' order by user_id DESC") or die(mysqli_error());
			while($row=mysqli_fetch_array($query)){
				$id = $row['user_id'];
?>	
		<div id="left-nav1">
			<h2>Personal Info</h2>
			<table>
				<tr>
					<td><label>Username</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['username']; ?></b></td>
				</tr>
				<tr>
					<td><label>Birthday</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['birthday']; ?></b></td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['gender']; ?></b></td>
				</tr>
				<tr>
					<td><label>Contact</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['number']; ?></b></td>
				</tr>
				<tr>
					<td><label>Location</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['location']; ?></b></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['email']; ?></b></td>
				</tr>
			
			</table>
		</div>
<?php
}
?>


		

<?php
	include("includes/database.php");
			$query=mySQLI_query($conn,"SELECT * from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC") or die(mySQL_error());
			while($row=mySQLI_fetch_array($query)){
				$posted_by = $row['firstname']." ".$row['lastname'];
				$location = $row['post_image'];
				$profile_picture = $row['profile_picture'];
				$content=$row['content']; 
				$time=$row['created'];	
				$post_id = $row['post_id'];
?>
		<div id="right-nav1">
		
			
			<div class="profile-pics">
			<img src="<?php echo $profile_picture ?>">
			<b><?php echo $posted_by ?></b>
			<strong><?php echo $time = time_stamp($time); ?></strong>
			</div>
			
		<br />
		
			<div class="post-content">

			<div class="delete-post">
			<a href="delete_post.php<?php echo '?id='.$post_id; ?>" title="Delete your post"><button class="btn-delete">X</button></a>
			</div>
			
			<p><?php echo $row['content']; ?></p><hr>
		<center>
			<img src="<?php echo $location ?>">
		</center>
		
			</div>

<?php
	include("includes/database.php");
			$solution=mySQLI_query($conn,"SELECT * from solutions where post_id='$post_id' order by post_id DESC") or die(mySQL_error());
			while($row=mySQLI_fetch_array($solution)){
			$solution_id=$row['solution_id'];
			$solution_content=$row['solution_content'];
			$time=$row['created'];	
			$post_id=$row['post_id'];
			$user=$_SESSION['id'];
			
?>			
			<div class="solution-display"<?php echo $solution_id ?>>

					<div class="delete-post">
					<a href="delete_solutions.php<?php echo '?id='.$solution_id; ?>" title="Delete your solution"><button class="btn-delete">X</button></a>
					</div>
					
				<div class="user-solution-name"><img src="<?php echo $row['image']; ?>">&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?><b class="time-solution"><?php echo $time = time_stamp($time); ?></b></div>
				<div class="solution"><?php echo $row['solution_content']; ?></div>
			
			</div>
			<br />

<?php
}
?>
			

		 <form  method="POST" action="solutions.php">			
			<div class="solution-area">
			
						<?php $image=mysqli_query($conn,"select * from user where user_id='$id'")or die(mysqli_error());
							while($row=mysqli_fetch_array($image)){
							

							?>
						<img src="<?php echo $row['profile_picture']; ?>">
						<?php } ?>
			
			<textarea name="solution_content" placeholder="Give your solutions....." class="solution-text"></textarea>
			<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
			<input type="hidden" name="user_id" value="<?php echo $firstname . ' ' . $lastname  ?>">
			<input type="hidden" name="image" value="<?php echo $profile_picture  ?>">
			<input type="submit" name="post_solution" value="Enter" class="btn-solution">
			
			</div>
		</form>
		
<?php
	include ('includes/database.php');
	
	if (isset($_POST['post_solution']))
	{
		$user=$_SESSION['id'];
		$solution_content=$_POST['solution_content'];
		$post_id=$_POST['post_id'];
		$user_id=$_POST['user_id'];
		$time=time();
		

		{
			mySQLI_query($conn,"INSERT INTO solutions (post_id,user_id,name,solution_content,image,created)
			VALUES ('$post_id','$id','$user_id','$solution_content','$profile_picture','$time')")
			or die (mySQLI_error());
			echo "<script>window.location='profiles.php'</script>";
		}
			
	}
	
?>

			
		</div>
	<?php
	}
	?>
	
		
	</div>
	<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"><img src="image\btn.png" width="50px" height="50px"></i></a>

</body>

</html>