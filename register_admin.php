<?php 
	$error="";
	
	if(isset($_POST['submit'])){
	signUp();
	}
	function userNew(){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$db=mysqli_connect('localhost','roott','1234');
			mysqli_select_db($db,'web');
			$sql="insert into admin(name,password) values('$username','$password')";
			$ss=mysqli_query($db,$sql);
			if($ss){
				 $GLOBALS['error']="YOUR ADD NEW ADMIN IS COMPLETED :)";
			}
				mysqli_close($db);

	}

	function signUp(){
		
		if(empty($_POST['username'])||empty($_POST['password'])){

			 $GLOBALS['error']="  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Insert All Field";	

		}
		else{

			$username=$_POST['username'];
			$password=$_POST['password'];
			$db=mysqli_connect('localhost','roott','1234');
			mysqli_select_db($db,'web');
			$sql="select * from admin where name='$username'";
			$ss=mysqli_query($db,$sql);
			if(!$row=mysqli_fetch_array($ss)){
				userNew();
			}else{
				 $GLOBALS['error']="SORRY...YOU ARE ALREADY EXISIT ADMIN";
			}
				mysqli_close($db);

	}
}

	
		
		
?>