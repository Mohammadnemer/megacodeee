<?php
	session_start();
	$error="";
	if(isset($_POST['ce'])){
		if(isset($_POST['submit'])){
		if(empty($_POST['username'])||empty($_POST['password'])){
			$error="Username or Password is invalid";
			
		}
		else
		{

			$username=$_POST['username'];
			$password=$_POST['password'];
			$db=mysqli_connect('localhost','roott','1234');
			mysqli_select_db($db,'web');
			$sql="select * from admin where name='$username' and password='$password'";
			$ss=mysqli_query($db,$sql);
			$count=mysqli_num_rows($ss);
			if($count==1){
				$_SESSION['login_admin']=$username;
				header("location:admin.html");
			}
			else{
				$error="Username or Password is invalid";
			}

			mysqli_close($db);
				}
		}


	}elseif(isset($_POST['submit'])){
		if(empty($_POST['username'])||empty($_POST['password'])){
			$error="Username or Password is invalid";
			
		}
		else
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$db=mysqli_connect('localhost','roott','1234');
			mysqli_select_db($db,'web');
			$sql="select * from user where name='$username' and password='$password'";
			$ss=mysqli_query($db,$sql);
			$count=mysqli_num_rows($ss);
			if($count==1){
				$_SESSION['login_user']=$username;
				header("location:dash.php");
			}
			else{
				$error="Username or Password is invalid";
			}

			mysqli_close($db);
				}
		}

	
	
	
	
	
?>