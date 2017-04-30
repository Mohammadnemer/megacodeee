<!DOCTYPE html>
<html>
<head>
<link rel="icon" 
     type="image/png" 
     href="images/MegaSync.png">
	<meta charset="UTF-8">
	<meta name="keyword" content="login">
	<meta name="description" content="Login with Mega Code">
	<title>Mega Code</title>
	<link rel="stylesheet" type="text/css" href="accept_question.css">

</head>
<body>
	<div id="div1">
			<div class="header1">
				<header>
					<div id="title">
					<img src="images/MegaSync.png" width="30" height="30">
					<a href="home.php"> Mega Code</a>		
					</div>
					<ul>
						<a href="home.php"><li class="lihome">
							Home
						</li></a>
						<li class="lihome">Catalogue
							<div class="sub">
							<div class="sub-drop">
							<ol>
								<li><a href="java.php">Java</a></li>
								<li id="web" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web
									<div class="sub2">
									<div class="sub-drop2">
									<ul>
										<li><a href="html.php">Html</a></li>
										<li><a href="css.php">Css</a></li>
										<li><a href="js.php">JavaScript</a></li>
									</ul>
									</div>
									</div>
								</li>
								<li><a href="c++.php">C++</a></li>
								<li><a href="python.php">Python</a></li>
							</ol>
							</div>
							</div>
						</li>
						<a href="top.php"><li class="lihome">Top10</li></a>
						<a href="sugg_question.php"><li class="lihome">Suggestion</li></a>
						<a href="contact.html"><li class="lihome">Contact</li></a>
						<a href="about.html"><li class="lihome">About</li></a>
					</ul>
				</header>
				</div>
		</div>



		<div id="div2">
			<section>
				<form method="post" action="">
				  	<table>
				  		<tr>
				  			<th>Language</th>
				  			<th>Question</th>
				  			<th>Answer a</th>
				  			<th>Answer b</th>
				  			<th>Answer c</th>
				  			<th>Answer d</th>
				  			<th>Correct Answer</th>
				  		</tr>
				  		<?php
				  			//connect
							$link = mysqli_connect('localhost', 'roott', '1234');
							$db=mysqli_select_db($link,'web');
							$sql="select * from sugg ";
							$ss=mysqli_query($link,$sql);
							while ( $r=mysqli_fetch_row($ss)) {
								# code...
							
				  		print("<tr>
				  				<td><input class='form-style' type='text' name='type' value='$r[7]'> </td>
				  				<td><input class='form-style-question' type='text' name='question' value='$r[1]'> </td>
				  				<td><input class='form-style' type='text' name='answer_a' value='$r[2]'> </td>
				  				<td><input class='form-style' type='text' name='answer_b' value='$r[3]'> </td>
				  				<td><input class='form-style' type='text' name='answer_c' value='$r[4]'> </td>
				  				<td><input class='form-style' type='text' name='answer_d' value='$r[5]'> </td>
				  				<td><input class='form-style' type='text' name='correct' value='$r[6]'> </td>
				  				<td><button class='submit-btn' type='submit' name='accept' class='submit-btn'
				  						value='$r[0]'>Accept</button> </td>
				  				<td><button class='submit-btn' type='submit' name='reject' value='$r[0]' class='submit-btn'>Reject</button> </td>


				  			
				  		</tr>");}
				  		
				  		if(isset($_POST['accept'])){
				  			extract($_POST);
				  			
				  			$sql_q="select * from sugg where id='$accept'";
				  			$sss=mysqli_query($link,$sql_q);
				  			$rr=mysqli_fetch_row($sss);
				  			if(strcmp($rr[7], 'java')){
				  				$select=$rr[7];
				  			}else{
				  				$select='answer';
				  				
				  				
				  			}
				  			$sql_accept="insert into $select(question,a1,a2,a3,a4,ac) values('$rr[1]','$rr[2]','$rr[3]','$rr[4]','$rr[5]','$rr[6]')";
				  			$sss=mysqli_query($link,$sql_accept);
				  			$sql_de="DELETE FROM sugg where id='$accept'";
				  			$ssss=mysqli_query($link,$sql_de);
				  			echo "<meta http-equiv='refresh' content='0'>";
				  		}

				  		if(isset($_POST['reject'])){
				  			extract($_POST);
				  			
				  			$sql_q="select * from sugg where id='$reject'";
				  			$sss=mysqli_query($link,$sql_q);
				  			$rr=mysqli_fetch_row($sss);
				  			$sql_de="DELETE FROM sugg where id='$reject'";
				  			$ssss=mysqli_query($link,$sql_de);
				  			echo "<meta http-equiv='refresh' content='0'>";
				  		}

				  		mysqli_close($link);

				  		?>
				  	</table>
    
				
				</form>
			</section>
		</div>
		



		<div id="footer2">
				<footer>
				<p>CopyRight &nbsp; &copy; &nbsp;Mega Code</p>
				</footer>
			</div>
</body>
</html>