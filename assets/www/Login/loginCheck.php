<?php
	$username = mysql_real_escape_string($_POST['names']);
	$password = mysql_real_escape_string(sha1($_POST['passwords']));
	
	if($username!=""&&$password!="")
	{
		require_once('../databaseVariables.php');
		$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);
		
		//check connection
		if(mysqli_connect_errno($con))
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$query="SELECT username, password, isInstructor FROM user WHERE username='$username' and password='$password'";
		$result = mysqli_query($con, $query)  or die('Error querying database 1.');;
		
		if(mysqli_num_rows($result)==1){
			session_start();
			$_SESSION['username']=$username;
			$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
			if($row["isInstructor"]==1){
				echo 2;
			}
			else{
				echo 1;
			}
		}
		else{
			echo 0;
		}
	}
?>