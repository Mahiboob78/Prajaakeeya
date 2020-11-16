<?php include ('session.php');?>
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
			VALUES ('$post_id','$id','$user_id','$solution_content','$profile_picture',$time)");
			echo "<script>window.location='home.php'</script>";
		}
			
	}
	
?>