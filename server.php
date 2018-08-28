<?php
	session_start();

	$user_name="";
	$email="";
	$errors=array();
	
	

//connect to database
$db= mysqli_connect('localhost', 'root', '', 'registration');

//if the register button is clicked
if(isset($_POST['register'])){
	$user_name= mysql_real_escape_string($_POST['user_name']);
	$email = mysql_real_escape_string($_POST['email']);
	$password_1 = mysql_real_escape_string($_POST['password_1']);
	$password_2 = mysql_real_escape_string($_POST['password_2']);
	
	//ensure that form fields are filled properly
	if(empty($user_name)){
		array_push($errors,"User name is required"); //add error to errors array
	}
	if(empty($email)){
		array_push($errors,"Email is required");
	}
	if(empty($password_1)){
		array_push($errors,"Password is required");
	}
	if($password_1 !=$password_2){
		array_push($errors,"The two passwords do not match");
	}
	
	//if there are no errors, save user to database
	if(count($errors)==0){
		$password=md5($password_1);  //encrypt password before storing in database(security)
		
		$sql="INSERT INTO users(username,email,password) VALUES('$user_name','$email','$password')";
		
		mysqli_query($db, $sql);
		
    }
}
	//log user in form login page
	if(isset($_POST['login'])){
		$user_name= mysql_real_escape_string($_POST['user_name']);
	
		$password = mysql_real_escape_string($_POST['password']);
	
	//ensure that form fields are filled properly
	if(empty($user_name)){
		array_push($errors,"User name is required"); //add error to errors array
	}
	if(empty($password)){
		array_push($errors,"Password is required");
	}
	if(count($errors)==0){
			$password= md5($password);//encrypt password before comparing with that database  
			$query= "SELECT*FROM users WHERE user_name='$user_name' AND password='$password'";
			$result=mysqli_query($db,$query);
			if(mysqli_num_rows($result)==0){
				//log user in
				$_SESSION['user_name']=$user_name;
				$_SESSION['success']= "You are now logged in";
				header('location:index.php'); //redirect to home page
			}else{
				array_push($errors, "wrong user_name/password combination");
		}
	}
}
//logout
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['user_name']);
	header('location:login.php');
}
?>	
    