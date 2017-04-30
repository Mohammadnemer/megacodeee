<?php 
	
	$db=mysqli_connect('localhost','roott','1234');
	mysqli_select_db($db,'web');
	session_start();
	$use=$_SESSION['login_admin'];
	$sql="select * from admin where name='$use'";
	$ss=mysqli_query($db,$sql);
	$count=mysqli_fetch_assoc($ss);
	$login=$count['name'];
	if(!isset($login)){
	mysqli_close($db); 
	header('Location: login.php'); 
}

?>