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
	<link rel="stylesheet" type="text/css" href="dash.css">
	
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
							
							
							
							
							 <div class='info'>
									<ul id='dd'>
								<li id= usee><?php echo $login; ?></li>
								<li id=usee>Exp : <?php echo $expp;?></li>
							<li><a href='edit.php'>Edit Profile</a></li>
							<li><a href='logout.php'>logout</a></li>
							</ul>
							</div>
											

							
							
							
							
						</div>
					
				</header>

				</div>	

						
						
		</div>
		<div id="sc">
		<img src="images/iMac-27.png" width="700" height="600">
		</div>
		<div id="la">
			<table>
				<tr>
					<td><a href="java.php"><img src="images/Java icon.png" width="80" height="80"></a></td>
					<td><a href="python.php"><img src="images/7tuk.png" width="80" height="80"></a></td>
					<td><a href="c++.php"><img src="images/c--logo-icon-0.png" width="80" height="80"></a></td>
				</tr>
				<tr>
					
					<td><a href="html.php"><img src="images/MetroUI-Apps-HTML-5-icon.png" width="80" height="80"></a></td>
				
					<td><a href="js.php"><img src="images/acb530d0.png" width="80" height="80"></a></td>
					<td><a href="css.php"><img src="images/css-xxl.png" width="80" height="80"></a></td>
				</tr>
				
			</table>
		</div>
		<div id="footer2">
				<footer>
				<p>CopyRight &nbsp; &copy; &nbsp;Mega Code</p>
				</footer>
			</div>


</body>
</html>