<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['pass1'];
	$cpassword = sha1($_POST['pass2']);
	$tel = $_POST['tel'];
	$cellPhoneProvider= $_POST['providerMenu'];
	
	require_once('../databaseVariables.php');
	//$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);
	
	
	if($name && $email && $password && $cpassword)
	{
		mysql_connect($DBHOST, $DBUSER, $DBPASSWORD) or die("We couldn't connect");
		mysql_select_db($DATABASE);
		
		mysql_query("INSERT INTO user (username,password,email,telephone,cellPhoneProvider,isInstructor) VALUES('$name','$cpassword','$email','$tel','$cellPhoneProvider','0')");
		echo 1;
	}
	else{
		echo "not allowed";
	}
		/**
		//check connection
		if(mysqli_connect_errno($con))
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		
		//$query3 = "INSERT INTO user (username,password,email,telephone,isInstructor) VALUES('$name','$cpassword','$email','$tel', '0')");
		$query = "INSERT INTO user VALUES ('$name', '$cpassword', '$email', '$tel', '0')";
		$result = mysqli_query($con, $query) or die('Error querying database 1.');
		mysqli_close($con);
		echo 1;
	}
	else{
		echo "not allowed";
	}
	**/
?>