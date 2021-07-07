<?php
	$conn=mysqli_connect("localhost","root","","mr.fix");
	if($conn)
	{
		if(isset($_POST['submit']))
		{
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$qry="select * from signup where email='$user' and password='$pass'";
		$result=mysqli_query($conn,$qry);
		if(mysqli_num_rows($result))
			header("location: index.html");
		else
			header("location: login.php");
		}
	}
	else
		echo "could not connect";
?>