<?php
include ("dbconnection.php");
if($conn)
{
	mysqli_select_db($conn,"test");
	mysqli_query($conn,"insert into emp values (3,'pqr','ahmedabad');");
	$sql="select * from emp where city='jamnagar'";
	$data=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($data))
	{
		echo $row[0],$row['ename'],$row['city'];
	}
}
else
	echo "not connected";
?>
