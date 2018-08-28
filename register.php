<?php include('server.php');?>
<!DOC TYPE=HTML>
<html>
<head>
<title>User Registration</title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
	<div class="header" >
	<h1>Register</h1>
	</div>
	
	<form method="post" action="register.php">
	
	<!---display validation errors here--->
	<?php include('errors.php'); ?>  
		<div class="Input_Group">
		<label>User name</label>
		<input type="text" name="user_name" value="<?php echo $user_name; ?>">
		</div><br>
		
		<div class="Input_Group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
		</div><br>
		
		<div class="Input_Group">
		<label>Password</label>
		<input type="password" name="password_1">
		</div><br>
		
		<div class="Input_Group">
		<label>Confirm Password</label>
		<input type="password" name="password_2">
		</div><br>
		
		<div class="Input_Group">
		<button type="submit" name="register" class="btn">Register</button>
		</div><br>
		<p>
		Already a member? <a href="login.php">Sign in</a>
		</p>
	
	</form>
</body>
</html>