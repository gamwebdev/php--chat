<!DOCTYPE html>

<html>
	<head>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<title>Welcome to Chat Appk</title>
	</head>
	<body>
	<h2>LOGIN FORM</h2>
		<div id="LoginDiv">
		<form method="post" action="pages/UserLogin.php">
			<table>
				<tr>
					<td>Email:</td><td><input type="mail" name="UserMailLogin" /></td>
				</tr>

				<tr>
					<td>Password:</td><td><input type="password" name="UserPasswordLogin" /></td>
				</tr>

				<tr>
					<td></td><td><input type="submit" value="Log In" /></td>
				</tr>
				
				<?php 

				 ?>

				 <tr>
				 	<td></td><td><span style="color:red"> Error Login</span></td>
				 </tr>


			</table>
			</form>
		</div>

		<h2>Sign Up Div</h2>
		<div id="SignUpDiv">
		  <form method="post" action="pages/InsertUser.php">		
			<table>
				<tr>
					<td>Your Name:</td><td><input type="text" name="UserName" /></td>
				</tr>

				<tr>
					<td>Your Email:</td><td><input type="mail" name="UserMail" /></td>
				</tr>

				<tr>
					<td>Password:</td><td><input type="password" name="UserPassword" /></td>
				</tr>

				<tr>
					<td></td><td><input type="submit" value="SignUp"></td>
				</tr>

				<?php 
				if(isset($_GET['success'])){

				 ?>
					<tr>
					<td></td><td><span style="color:green"> User Inserted </span></td>
				</tr>
				 <?php 
				 }
				  ?>
				
			</table>
			</form>
		</div>
	</body>
</html>