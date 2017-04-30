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
		<link rel="stylesheet" type="text/css" href="top.css">
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
		<div id="list">
			<table>
				<caption style="position: relative;left: -40px;">Top 10</caption>
				<?php 
					$db=mysqli_connect('localhost','roott','1234');
					mysqli_select_db($db,'web');
					$sql="select * from user ORDER BY exp DESC";
					$ss=mysqli_query($db,$sql);
					$x=1;


					while($r=mysqli_fetch_row($ss)){
					   if($x<=10){
							switch($x){
									case 1:				
									print("<tr>
												
									<td><img style='border-radius: 50%;' src='$r[4]' width='50' height='50'></td>
									<td id='u1'>$r[0] ( $r[3] EXP )</td>
									</tr>");
									break;
									
									case 2:				
									print("<tr>
												
									<td><img style='border-radius: 50%;' src=' $r[4]' width='50' height='50'></td>
									<td id='u2'>$r[0] ( $r[3] EXP )</td>
									</tr>");
									break;

									case 3:				
									print("<tr>
												
									<td><img style='border-radius: 50%;' src='$r[4]' width='50' height='50'></td>
									<td id='u3'>$r[0] ( $r[3] EXP )</td>
									</tr>");
									break;

									default:
									print("<tr>
												
									<td><img style='border-radius: 50%;' src='$r[4]' width='50' height='50' ></td>
									<td >$r[0] ( $r[3] EXP )</td>
									</tr>");
								}


								
							$x=$x+1;
					}
	     	 		else
						break;
						
					}
				?>

			</table>
		</div>
		<div id="footer2">
				<footer>
				<p>CopyRight &nbsp; &copy; &nbsp;Mega Code</p>
				</footer>
			</div>
</body>
</html>