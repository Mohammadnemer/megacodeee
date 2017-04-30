<?php
	include ('session_admin.php');
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
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script type="text/javascript">
		function printTime(){
			var d=new Date();
			var hours=d.getHours();
			var mins=d.getMinutes();
			var secs=d.getSeconds();
			var day=d.getDay();
			var date=d.getDate();
			var month=d.getMonth();
			var year=d.getFullYear();

			switch(day){
				case 0:
					day="Sunday";
					break;
				case 1:
					day="Monday";
					break;
				case 2:
					day="Tuesday";
					break;
				case 3:
					day="Wednesday";
					break;
				case 4:
					day="Thursday";
					break;
				case 5:
					day="Friday";
					break;
				case 6:
					day="Saturday";
					break;
			}

			
			if(mins<10){
				mins="0"+mins;
			}
			if(hours<10){
				hours="0"+hours;
			}
			if(secs<10){
				secs="0"+secs;
			}

			month=month+1;
			document.getElementById("test").innerHTML =hours+"."+mins+"."+secs;
			document.getElementById("clock").innerHTML =day+", "+date+"."+month+"."+year;
		}
			setTimout(printTime,500);
				
	</script>
	
</head>
<body onload="printTime(); setInterval('printTime()', 1000 )">
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
							
							
							<img src='images/photo-user.png' width="50" height="50">
							
							<img class="arrow" src="images/keyboard_arrow_down_grey_192x192.png" width="30" height="30">
							
							
							
							
							 <div class='info'>
									<ul id='dd'>
								<li id= usee><?php echo $login; ?></li>
							
							<li><a href='logout.php'>logout</a></li>
							</ul>
							</div>
											

							
							
							
							
						</div>
					
				</header>

				</div>					
		</div>
		
		<div id="div2" >
			<div id="section1">
				<section>
					<span id="add_q" ><a href="add_question.php">Add Question</a></span>
					<span id="add_a" ><a href="add_admin.php">Add Admin</a></span>
					<span id="accept" ><a  href="accept_question.php">Accept Question</a></span>
					<span id="update_q" ><a  href="update_question.php">Delete Question</a></span>
				</section>		
			</div>
			<form id='all'>
				<div id="test"></div>
				<div id='clock'></div>
			</form>




		<div id="footer2">
				<footer>
				<p>CopyRight &nbsp; &copy; &nbsp;Mega Code</p>
				</footer>
			</div>


</body>
</html>