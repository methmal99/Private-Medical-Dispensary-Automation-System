<?php
session_start();
$con=mysqli_connect("localhost","root","","systemdb");
if(isset($_POST['docsub1'])){
	$dname=$_POST['username3'];
	$dpass=$_POST['password3'];
	$query="select * from doctb where username='$dname' and password='$dpass';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    
		      $_SESSION['dname']=$row['username'];
      
    }
		header("Location:");
	}
	else{
    echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index.php';</script>");
  }
}