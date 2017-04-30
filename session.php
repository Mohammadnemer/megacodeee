<?php 
	
	$db=mysqli_connect('localhost','roott','1234');
	mysqli_select_db($db,'web');
	session_start();
	$use=$_SESSION['login_user'];
	$sql="select * from user where name='$use'";
	$ss=mysqli_query($db,$sql);
	$count=mysqli_fetch_assoc($ss);
	$login=$count['name'];
	$pass=$count['password'];
	$email=$count['email'];
	$expp=$count['exp'];
	$imgg=$count['img'];
	if(!isset($login)){
	mysqli_close($db); 
	header('Location: login.php'); 
}

?>