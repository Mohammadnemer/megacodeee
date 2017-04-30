<?php

include 'register_admin.php';

?>
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
	<link rel="stylesheet" type="text/css" href="add_admin.css">

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
				  <div id="login-box">
             <b id="caption">Add Admin  </b>
            <div id="label">
            <label>UserName </label>
            </div>
         <div id="name">
       <input type="text" name="username" size="40" maxlength="50" class="form-styling" >
       </div>

         <div id="label2">
            <label>Password </label>
            </div>
         <div id="name2">
       <input type="password" name="password" size="40" maxlength="50" class="form-styling" >
       </div>

       <div id="btn">
       <button id="btn1" type="submit" name="submit"><b> Done </b></button>
       </div>
       <span id="error" style="position: relative;top: 60px;left: 15px;color: red;"><?php echo $error; ?></span>
       
    </div>
				
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