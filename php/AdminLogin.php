<?php
	session_start();
	include 'db.php';
	/*Variable declaration*/
	$username=$_POST['userName'];
	$password=$_POST['password'];
	if(!empty($email) || !empty($password))// checks if email or password was sent empty
	{
		/*Cleans up post data to avoid sql injections*/
		$username = mysqli_real_escape_string($connection, stripslashes($username));
		$password = mysqli_real_escape_string($connection, stripslashes($password));
		

		// SQL query to fetch information of registered users and finds user match.
		$query = mysqli_query($connection, "SELECT * FROM admin WHERE username='$username'") or die("Failed to query database".mysqli_error($connection));
		$rows = mysqli_fetch_array($query);
		if($password == $rows['password']){
			header("Location: /viewUploads.php");// subtitute index for videos viewing page
		}
		else{
			$_SESSION['Message'] =   "Email or Password incorrect";
			header("Location: /AdminLogin.php");
		}
		mysqli_close($connection); // Closing Connection to database
	}
	else{
		$_SESSION['Message'] = "Please enter username or password";
		header("Location: /AdminLogin.php");
	}
?>