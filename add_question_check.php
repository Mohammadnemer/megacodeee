<?php
	extract($_POST);
	$error="";
	if(isset($_POST['Done'])){
		if(isset($_POST['radio'])){
	if(empty($q)||empty($a1)||empty($a2)||empty($a3)||empty($a4)){

			 $GLOBALS['error']="  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Insert All Field";	

		}else{
			$db=mysqli_connect('localhost','roott','1234');
			mysqli_select_db($db,'web');
			$select=$type;
		$sql="insert into $select(question,a1,a2,a3,a4,ac) values('$q','$a1','$a2','$a3','$a4','$radio')";
			$ss=mysqli_query($db,$sql);
			if($ss){
				 $GLOBALS['error']="YOUR ADD NEW Question IS COMPLETED :)";
			}
			mysqli_close($db);
			}}else
				$GLOBALS['error']="PLEASE SELECT CORRECT ANSWER :(";
	}
?>