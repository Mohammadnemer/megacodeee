<?php 
	include('register.php');
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" 
     type="image/png" 
     href="images/MegaSync.png">
		<meta charset="UTF-8">
		<meta name="description" content="SignUp with Fight Code">
		<meta name="keyword" content="Signup,login,regestir">
		<title>Mega Code</title>
		<link rel="stylesheet" type="text/css" href="css_signup.css">		
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
				<form  method="POST" action="" enctype="multipart/form-data" >
					<h2>Sign Up</h2>
					<label>NAME<br>
						<input class="form-styling" type="text" name="username" minlength="7" maxlength="10">
					<br></label>
					<label>EMAIL<br>
						<input class="form-styling" type="email" name="email" >
					<br></label>
					<label>PASSWORD<br>
						<input class="form-styling" type="password" name="password" minlength="8">
					</label><br>
					<label>CONFIRM PASSWORD<br>
						<input class="form-styling" type="password" name="confirm" >
					</label>
					<span style="position: relative;top: -20px;left: -15px; color: red;"><?php echo $error; ?></span>
					<br>
					<!-- buttun uploads tag and style css  -->
					<input type="file" name="ff" id="ff" style="
					
					overflow: hidden;
					position: absolute;
					z-index: -1;
				
					"><br>
					<label for="ff" style="position: relative;top: -325px; left: 160px;

					font-size: 10px;
				    text-transform: uppercase;
				    text-align: center;
				    width: 110px;
				    height: 8px;
				    color: #ffffff;
				  	
				    font-weight: 700;
				    color: white;
				    border-radius: 6px;
				    background-color: #ff0055;
				    display: inline-block;
				    
				    cursor: pointer;

					">
					<img style="position: relative;top: 1px; left: -1px;" src="images/124546-matte-white-square-icon-arrows-arrow2-upload.png " width="20" height="20">
					<span style="position:relative;top: -7px; left: -2px; ">Choose Photo</span></label>
					<input class="btn-signup" type="submit" name="signup"
						style="position: relative;left: -120px; top: -20px;" 
					><br>
					<b id="reglink">Do you have an account?<a href="login.php">click to login. </a></b>
					
				</form>
	
		</section>
	

			<div id="all">
		</div>
		<div id="footer2">
				<footer>
				<p>CopyRight &nbsp; &copy; &nbsp;Mega Code</p>
				</footer>
			</div>
	</div>
	</body>
</html>