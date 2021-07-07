<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="test";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
$db=mysqli_select_db($conn,$dbname);
?>