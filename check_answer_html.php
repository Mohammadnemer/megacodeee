<?php
	include('session.php');
	$answer=$_POST['an'];
	$Value = $_POST['myVariable'];
	if(strcmp($answer,$Value)){
		header('Location: result.php');
	}
	else{
		$expp=$expp+1;
		$sqll="UPDATE user SET exp='$expp' WHERE name='$use'";
		$ss=mysqli_query($db,$sqll);
		header('Location: html.php');}
	
?>