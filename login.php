<?php include('server.php');?>
<!DOC TYPE=HTML>
<html>
<head>
<title>User Registration</title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
	<div class="header" >
	<h1>Login</h1>
	</div>
	
	<form method="post" action="login.php">
	
		<!---display validation errors here--->
		<?php include('errors.php'); ?> 
		
		<div class="Input_Group">
			<label>User name</label>
			<input type="text" name="user_name">
		</div><br>
		

		<div class="Input_Group">
		<label>Password</label>
		<input type="password" name="password">
		</div><br>
		
		
		<div class="Input_Group">
		<button type="submit" name="login" class="btn">Login</button>
		</div><br>
		<p>
		Not yet a member? <a href="register.php">Sign up</a>
		</p>
	
	</form>
</body>
</html>