<?php
	include 'session.php';
	include 'check_edit.php';
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
	<link rel="stylesheet" type="text/css" href="edit.css">
	
</head>
<body >
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

		<div id="edit">
			<form  action="" method="POST" enctype="multipart/form-data">
				<table>
					<tr>
						<td rowspan="3"><img src="<?php echo $imgg; ?>" width="200"
						height="200"></td>
						<td><input class="form-styling" type="text" name="username" maxlength="10"
							minlength="7" value="<?php echo $login; ?>"></td>
					</tr>
					<tr>
						<td><input class="form-styling" type="email" name="email" value="<?php echo $email; ?> "></td>
					</tr>
					<tr>
						<td><input class="form-styling" type="password" name="password" placeholder="Password" value="<?php echo $pass;?>" minlength="8" ></td>
					</tr>
					<tr>
						<td><input type="file" name="file" id="file" class="btn-file" value="<?php echo $imgg; ?>"></td>
						<label for="file"><img style="position: relative;top: 4px; left: -1px;" src="images/124546-matte-white-square-icon-arrows-arrow2-upload.png " width="20" height="20">Choose a Photo</label>
						
					</tr>
				</table>
				<?php
				echo "<input type='hidden' name='hidden' value='".htmlentities($login)."'>";
				?>

				<div style="color: red; position: relative;left: 260px; top: -10px;"><?php echo $error;?></div>
				<input type="submit" name="submit" class="btn-submit" value="update">
			</form>
			
		</div>

		<div id="footer2">
				<footer>
				<p>CopyRight &nbsp; &copy; &nbsp;Mega Code</p>
				</footer>
			</div>


</body>
</html>