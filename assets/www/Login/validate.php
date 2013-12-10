<?php
	$name = &$_POST['names'];
	$email = &$_POST['emails'];
	require_once('../databaseVariables.php');
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);
	
	if($name!="")
	{
		//check connection
		if(mysqli_connect_errno($con))
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$query1="SELECT username FROM user WHERE username='$name'";
		$username = mysqli_query($con, $query1)  or die('Error querying database 1.');
		$count = mysqli_num_rows($username);
		if($count!=0)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	
	
	if($email!="")
	{
		//check connection
		if(mysqli_connect_errno($con))
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		$query2="SELECT email FROM user WHERE email='$email'";
		$useremail = mysqli_query($con, $query2)  or die('Error querying database 1.');;
		$countemail = mysqli_num_rows($useremail);
		
		if($countemail!=0){
			echo 1;
		}
		else{
			echo 0;
		}
	}
?>