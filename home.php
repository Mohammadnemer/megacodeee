<!DOCTYPE html>
<html>
	<head>
		<link rel="icon"  type="image/png"  href="images/MegaSync.png">
		<meta charset="UTF-8">
		<meta name="description" content="Website to challenges code and test bank code ">
		<meta name="keywords" content="java , html , css , JavaScript , python ,web ,c++">
		<title>Mega Code</title>
		<link rel="stylesheet" type="text/css" href="css_home.css">
	</head>
	<body>
		<!-- Here exist tag header-->
		<div id="div1">
			<div class="header1">
				<header>

					<!-- tag div to title logo( img and a) -->
					<div id="title">
					<img src="images/MegaSync.png" width="30" height="30">
					<a href="home.php"> Mega Code</a>		
					</div>
					<!-- include 3 menu-->
					<!-- 1- tag ul top menu--> 
					<ul>
						<a href="home.php"><li class="lihome">
							Home
						</li></a>
						<li class="lihome">Catalogue
							<!-- 2- tag div include tag ol sub 1 menu-->
							<div class="sub">
							<div class="sub-drop">
							<ol>
								<li><a href="java.php">Java</a></li>
								<li id="web" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web
									<!-- 3- tag div include tag ul sub 2 menu-->
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

		<!-- div tag section1 exist 3 tag a singup  and signin-->
		<div id="div2">
			<div id="section1">
				<section>
					<span id="signup" ><a href="signup.php">Regestier</a></span>
					<span id="signin" ><a href="login.php">Login</a></span>
				</section>		
			</div>

			<!-- div tag section2 exist 2 image and information // and table view top 3-->
			<div id="section2">
				<section>

					<div id="image1">
						<p><b>The best way to learn</b></p>
						<img id="ii1" src="images/1-UcpODv1lxR_Bt3MyaOvYWA.jpeg" width="500" height="290">
					</div>
				
					<div id="image2">
						<img src="images/code2.png" width="500" height="290">
						<p><b>Top Questions for programming languages </b></p>
					</div>
					
					<table>
						<caption>Top 3</caption>
								<?php 
					$db=mysqli_connect('localhost','roott','1234');
					mysqli_select_db($db,'web');
					$sql="select * from user ORDER BY exp DESC";
					$ss=mysqli_query($db,$sql);
					$x=1;


					while($r=mysqli_fetch_row($ss)){
					   if($x<=3){
							switch($x){
									case 1:				
									print("<tr>
												
									<td><img style='border-radius: 50%;' src='$r[4]' width='100' height='100'></td>
									<td id='u1'>$r[0] ( $r[3] EXP )</td>
									</tr>");
									break;
									
									case 2:				
									print("<tr>
												
									<td><img style='border-radius: 50%;' src='$r[4]' width='100' height='100'></td>
									<td id='u2'>$r[0] ( $r[3] EXP )</td>
									</tr>");
									break;

									case 3:				
									print("<tr>
												
									<td><img style='border-radius: 50%;' src='$r[4]' width='100' height='100'></td>
									<td id='u3'>$r[0] ( $r[3] EXP )</td>
									</tr>");
									break;

									
								}


								
							$x=$x+1;
					}
	     	 		else
						break;
						
					}
				?>
					</table>
					
				</section>
			</div>
		</div>

		<!-- div tag footer1 exist 3 table--> 
		<div id="div3">
			<div id="footer1">
				<footer>
					<!-- 1- main table -->
					<table id="hometable">

						<tr id="tit">
							<th>More About Company</th>
							<th>Keep Contact</th>
							<th>Contact Information</th>
						</tr>
					

						<tr>
							<td><p>Website to challenges with programming <br>&nbsp;&nbsp;language and the best way to <br>&nbsp;&nbsp;&nbsp;&nbsp;learn programming</p></td>
							
							<td>
								<!-- 2- table keep contact -->
								<table>
									
									<tr>
								        <th>
											<a href="http://www.facebook.com/nemer1996">
												<img src="images/facebook_logo_round.png" width="35" height="35">
											</a>
											</th>

											<td>
												<a href="http://www.facebook.com/nemer1996">Find us on facebook
												</a>
											</td>
									</tr>
									
									<tr>
										<th>
											<a href="http://www.twitter.com/MohammadNemer4">
													<img src="images/697029-twitter-512.png" width="40" height="40">
                                            </a>
										<td>
											<a href="http://www.twitter.com/MohammadNemer4">
											Follow on twitter
											</a>
										</td>
									</tr>

									<tr>
										<th>
											<a href=https://plus.google.com/u/0/105264824169215237507>
												<img src="images/google-plus-flat.png" width="30" height="30">
											</a>
										</th>
										<td>
											<a href="https://plus.google.com/u/0/105264824169215237507">Add on google plus
											</a>	
										</td>
									</tr>
								</table>

							</td>

							<td>
								<!-- 3- table contact information-->
								<table>
								
								<tr>
									<th><img src="images/home.png" width="30" height="30"></th>
									<td>Mega Code With Us Amman</td>
								</tr>
								<tr>
									<th><img src="images/iPhone-front-white-icon.png" width="30" height="30"></th>
									<td>0788795344</td>
								</tr>
								<tr>
									<th><img src="images/mail_icongrey.png" width="40" height="40"></th>
									<td>mohammadnemer1996@hotmail.com</td>
								</tr>
							</table>
							</td>

						</tr>

					</table>

				</footer>
			</div>

			<!-- div tag footer2 exist p copyright-->
			<div id="footer2">
				<footer>
				<p>CopyRight &nbsp; &copy; &nbsp;Mega Code</p>
				</footer>
			</div>

		</div>
	</body>
</html>