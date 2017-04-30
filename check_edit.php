<?php
	
	$error="";
	if(isset($_POST['submit'])){
	
			if(empty($_FILES['file']['name'])){
				$dir=$imgg;
			}else{
			$dir = "images/".$_FILES['file']['name'];
			move_uploaded_file($_FILES['file']['tmp_name'], $dir);
			$path = "localhost/new3/images".$_FILES['file']['name'];
			}

			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$hidden=$_POST['hidden'];
			$db=mysqli_connect('localhost','roott','1234');
			mysqli_select_db($db,'web');
			
			
			$sql_select="select * from user where name='$username'";
			$ss_select=mysqli_query($db,$sql_select);
			$r=mysqli_fetch_array($ss_select);
			if(strcmp($r[0], $username)){
				$sql="UPDATE user SET name='$username' ,  password='$password',  email='$email' , img='$dir' where name='$hidden'";
		
				$ss=mysqli_query($db,$sql);
				$_SESSION['login_user']=$username;
					
			
			}else{
				
				$sql="UPDATE user SET  password='$password',  email='$email' , img='$dir' where name='$hidden'";
				$ss=mysqli_query($db,$sql);
						
			}
			
				
			
			
			
				
				mysqli_close($db);
				/* refresh page because photo */
				echo "<meta http-equiv='refresh' content='0'>";
				

}
		

		
	
?>