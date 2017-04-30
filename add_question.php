<?php
	include 'add_question_check.php';

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
		<link rel="stylesheet" type="text/css" href="add_question.css">		
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
		<div id="sugg-form">
			<form method="POST" action="">
				<h2 ><b>Add Question</b></h2>
				<table>
					<tr>
						<td colspan="2">Type of Question</td>
						<td><select name="type">
							<option value="answer">Java</option>
							<option value="cplus">C++</option>
							<option value="python">Python</option>
							<option value="js">JavaScript</option>
							<option value="html">Html</option>
							<option value="css">Css</option>
						</select></td>
					</tr>
					<tr>
						<td><input id="w" type="text" name="q" placeholder="Write Question ???"
						
						></td>
					</tr>
					<tr>
						<td colspan="3"><b>Answers
						Each question can have correct answer. </b></td>
					</tr>
					<tr>
						<td colspan="2" ><input type="text" name="a1" placeholder="Answer 1"></td>
						<td><input type="radio" name="radio" value="a"></td>
					</tr>
					<tr>
						<td colspan="2" ><input type="text" name="a2" placeholder="Answer 2"></td>
						<td><input type="radio" name="radio" value="b"></td>
					</tr>
					<tr>
						<td colspan="2" ><input type="text" name="a3" placeholder="Answer 3"></td>
						<td><input type="radio" name="radio" value="c"></td>
					</tr>
					<tr>
						<td colspan="2" ><input type="text" name="a4" placeholder="Answer 4"></td>
						<td><input type="radio" name="radio" value="d"></td>
					</tr>
				</table>
				<div id="btn">
					<div style="position: relative;left: -50px; top: -10px; color: red;"><?php echo $error;?></div>
       				<input type="submit" name="Done" id="btn1">
       			</div>
			</form>
		</div>
		<div id="footer2">
				<footer>
				<p>CopyRight &nbsp; &copy; &nbsp;Mega Code</p>
				</footer>
			</div>
</body>
</html>