<?php
session_start();
$con=mysqli_connect("localhost","root","","systemdb");
if(isset($_POST['adsub'])){
	$username=$_POST['username1'];
	$password=$_POST['password2'];
	$query="select * from admintb where username='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
		header("Location:");
	}
	else
		echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index.php';</script>");
}
