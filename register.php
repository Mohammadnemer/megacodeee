<?php 
	$error="";
	if(isset($_POST['signup'])){
	signUp();
	}
	function userNew(){
		if(empty($_FILES['ff']['name'])){
			$GLOBALS['error']="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Please Choice Your Photo :(";
			}
			else{
			$dir = "images/".$_FILES['ff']['name'];
			move_uploaded_file($_FILES['ff']['tmp_name'], $dir);
			$path = "localhost/new3/images".$_FILES['ff']['name'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$confirm=$_POST['confirm'];
			$db=mysqli_connect('localhost','roott','1234');
			mysqli_select_db($db,'web');
			$sql="insert into user(name,password,email,img) values('$username','$password','$email','$dir')";
			$ss=mysqli_query($db,$sql);
			if($ss){
				 $GLOBALS['error']="YOUR REGISTRATION IS COMPLETED :)";
			}
				mysqli_close($db);
			}
	}

	function signUp(){
		
		if(empty($_POST['username'])||empty($_POST['password'])||empty($_POST['email'])||empty($_POST['confirm'])){

			 $GLOBALS['error']="  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Insert All Field";	

		}
		elseif(strcmp($_POST['password'], $_POST['confirm'])){
			$GLOBALS['error']="  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Insert coorect password";
		}
		else{

			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$confirm=$_POST['confirm'];
			$db=mysqli_connect('localhost','roott','1234');
			mysqli_select_db($db,'web');
			$sql="select * from user where name='$username'";
			$ss=mysqli_query($db,$sql);
			if(!$row=mysqli_fetch_array($ss)){
				userNew();
			}else{
				 $GLOBALS['error']="SORRY...YOU ARE ALREADY REGISTERED USER";
			}
				mysqli_close($db);

	}
}

	
		
		
?>