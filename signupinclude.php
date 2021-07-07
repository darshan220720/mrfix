<?php
$conn=mysqli_connect("localhost","root","","mr.fix");
if($conn)
{
	if(isset($_POST['submit']))
	{
		$fn=$_POST['firstname'];
		$ln=$_POST['lastname'];
		$Email=$_POST['emailid'];
		$pass=$_POST['password'];
		$repass=$_POST['Re-Password'];
		$city=$_POST['city'];
		$contact=$_POST['contact_no'];
		$cat=$_POST['categories'];
		if($fn=="" || $ln=="" || $Email=="" || $pass=="" || $city=="" || $contact=="" || $cat=="Choose categories from below...")
			echo "please enter values";
		else
		{
			if($pass==$repass)
			{
				$qry="insert into signup values ('$fn','$ln','$Email','$pass','$city','$cat','$contact')";
				$sql=mysqli_query($conn,$qry);
				if(mysqli_num_rows($sql))
					header("location: login3.php");
				else
					header("location: login.php");
			}
			else
				echo "please enter correct password";
		}
	}
}
else
	echo "could not connect";
?>