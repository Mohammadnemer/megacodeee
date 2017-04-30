<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" 
     type="image/png" 
     href="images/MegaSync.png">
<meta charset="UTF-8">
		<meta name="description" content="Website to challenges code and test bank code ">
		<meta name="keywords" content="java , html , css , JavaScript , python ,web ,c++">
	<title>Mega Code</title>
	<link rel="stylesheet" type="text/css" href="all.css">
	<style type="text/css">
		#colon{
			-webkit-transition:2s ease-out; 
			transition:2s ease-out;
		}
	</style>
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
					<div class="drop-info">
							<img style="border-radius: 50%;" src='<?php echo $imgg;?>' width="50" height="50">
							<img class="arrow" src="images/keyboard_arrow_down_grey_192x192.png" width="30" height="30">
						
							<div class="info">
							<ul id="dd">
							<li id= usee><?php echo $login; ?></li>
								<li id=usee>Exp : <?php echo $expp;?></li>
							<li><a href="edit.php">Edit Profile</a></li>
							<li><a href="logout.php">logout</a></li>
							</ul>
							</div>
							
							
						</div>
					
				</header>
				</div>
		</div>
		<div id="fo">

			<form action="check_answer.php" method="POST">

			<?php
		    //connect
			$link = mysqli_connect('localhost', 'roott', '1234');
				$db=mysqli_select_db($link,'web');
			//count row and randomly 	
				$result = mysqli_query($link,"select count(1) FROM answer");
				$row = mysqli_fetch_array($result);
				$total = $row[0];
				$in=rand(1,$total);
			//select question and answer randomly	
				$q="select * from answer where id=$in";
				$ss=mysqli_query($link,$q);	
				$r=mysqli_fetch_row($ss);
			print("	
			<p>$r[1]</p>");
			?>
			


			<?php
			print("
			<label>
				<input type='radio' name='an' value='a' checked>
			$r[2]</label><br>");
			
			
			print("
			<label>
				<input type='radio' name='an' value='b' >
			$r[3]</label><br>");
			print("
			<label>
				<input type='radio' name='an' value='c'>
			$r[4]</label><br>");
			print("
			<label>
				<input type='radio' name='an' value='d'>
			$r[5]</label><br>");
			print("
			<div id='btn'>
       			<button id='btn1'><b> OK </b></button>
       		</div>");
       		//answer check
       		$correct=$r[6];
			echo '<input type="hidden" name="myVariable" value="'.
     					htmlentities($correct).'">';
       		
       	
     	



       		mysqli_close($link);
       		

       	
       	
       		?>

			</form>
		</div>

		<!-- counter the question with java script -->
		<div style="width: 50px;height: 50px;background-color:black;border-radius: 50%;
					position: absolute;top: 75px;left: 980px; " id="colon">
				<span  id="counter" style="position: relative;left: 20px;top: 15px;color: #B2B1B2;">10</span>
			
			<!-- aduio counter -->
			<audio id="tictac" >
					<source src="ALARM_CL.WAV" type="audio/wav">
			</audio>	

			<script type="text/javascript">
			var c = 10;
				function start(){
					window.setInterval("change()" ,1000);

				}
				function change(){
					c--;
					if(c>=0){
					document.getElementById("counter").innerHTML = c;
						if(c<6){
						document.getElementById("colon").style.backgroundColor = "#c62828";
						document.getElementById("tictac").play();
						}
				}else{
					window.location.replace("result_time.php");
				}
						
				}
				window.addEventListener("load", start , false);
				
			</script>


			</div>
		
		<div id="footer2">
				<footer>
				<p>CopyRight &nbsp; &copy; &nbsp;Mega Code</p>
				</footer>
			</div>

</body>
</html>