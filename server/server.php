<?php
	session_start();
	//connect to the database
	$db = mysqli_connect('localhost','root','','steam');
	$errors = array();
	$fname='';
	$lname='';
	$email='';
	$birth_day='';
	$gender='';
	//if the register button is clicked
	if(isset($_POST['signup']))
	{
		$fname =mysqli_real_escape_string($db,$_POST['fname']);
		$lname =mysqli_real_escape_string($db,$_POST['lname']);
		$email =mysqli_real_escape_string($db,$_POST['email']);
		$Password_1 =mysqli_real_escape_string($db,$_POST['Password_1']);
		$Password_2 =mysqli_real_escape_string($db,$_POST['Password_2']);
		$birth_day =mysqli_real_escape_string($db,$_POST['day']);
		$gender =mysqli_real_escape_string($db,$_POST['gender']);

		if (empty($fname)) 
		{
			array_push($errors, "First Name is Required");
		}
		if (empty($lname)) 
		{
			array_push($errors, "Last Name is Required");
		}
		if (empty($email)) 
		{
			array_push($errors, "Email is Required");
		}
		if (empty($Password_1)) 
		{
			array_push($errors, "Password is Required");
		}
		if ($Password_1 != $Password_2) 
		{
			array_push($errors, "The two Password do not match");
		}
		if (empty($birth_day)) 
		{
			array_push($errors, "Enter Your Date of Birth");
		}
		if (empty($gender)) 
		{
			array_push($errors, "Fill up Gender field");
		}
		if (count($errors) == 0)
		{

		  	$password = md5($Password_1);//encrypt the password before saving in the database
		  	$query = "INSERT INTO users (fname, lname, email,password,gender,DOB) 
		  			  VALUES('$fname','$lname', '$email', '$Password_1','$gender','$birth_day')";
		  	mysqli_query($db, $query);
		  	$_SESSION['fname']=$fname;
		  	header('location: home.php');
		}
	}

	//Log user in form of login
	// LOGIN USER
	if (isset($_POST['done'])) 
	{
		$username = $_POST['mail'];
		$password = $_POST['password'];
		$username = stripslashes($username);
        $password = stripslashes($password);
        
		if (empty($username)) 
		{
			array_push($errors, "Username is required");
		}
		if (empty($password))
		{
			array_push($errors, "Password is required");
		}
		if (count($errors) == 0) 
		{
			$query = "SELECT * FROM `registration` WHERE email='$username' AND password='$password'";
            $results = mysqli_query($db,$query);
            $count = mysqli_num_rows($results);

			if ($count == 1) 
			{
				
				$_SESSION['mail']=$username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index2.php');
			}
			else 
			{
				array_push($errors, "Wrong Email or Password combination");
			}
		}
	}

	if (isset($_POST['forgetpassword'])) 
	{
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
		if (empty($email)) 
		{
			array_push($errors, "Email is required");
		}
		if (empty($password_1))
		{
			array_push($errors, "Password is required");
		}
		if ($password_1 != $password_2) 
		{
			array_push($errors, "The two Password do not match");
		}
		if (count($errors) == 0) 
		{
			$query = "SELECT *FROM users WHERE email='$email'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) 
			{
				$query = "UPDATE users SET password='$password_1' WHERE email='$email'";
				mysqli_query($db, $query);
				$_SESSION['success'] = "Your Password is Updated";
			}
			else
			{
				array_push($errors, "Wrong Email or Password combination");
			}
		}
	}

	//loggout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['fname']);
		header('location: login.php');
	}
?>
