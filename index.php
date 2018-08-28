<?php include('server.php'); 

	//if user is not logged in, they cannot access this page
	if(empty($_SESSION['user_name'])){
		header('location: login.php');
	}
?>
<!DOCTYPE html> 
<html>
<head>
<title>User Registration</title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
	<div class="header" >
		<h2>Home page</h2 >
	</div>
	
	<div class="content">
		<?php if(isset($_SESSION['success'])):?>
			<div class="error success">
				<h3>
					<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		
		<?php if(isset($_SESSION["user_name"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['user_name'];?></strong></p>
			<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
		<?php endif ?>
	</div>
</body>
</html>