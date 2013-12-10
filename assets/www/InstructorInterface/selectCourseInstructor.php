
<?php
	require_once('../databaseVariables.php');
	//create connection
	session_start();
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

	//check connection
	if(mysqli_connect_errno($con))
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "Select CourseName from course where username ='{$_SESSION['username']}'";

	$result = mysqli_query($con, $query) or die('Error querying database.');
	echo 	"<html><head>
<title>Classroom Information System</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script type='text/javascript' charset='utf-8' src='../cordova-2.9.0.js'></script>
<script type='text/javascript' charset='utf-8' src='../jquery/jquery-1.10.2.js'></script>
<script type='text/javascript' charset='utf-8' src='jquery/jquery.mobile-1.3.2.min.js'></script>
<link rel='stylesheet' type='text/css' href='jquery/css/jquery.mobile-1.3.2.min.css'/>
<script type='text/javascript' charset='utf-8'>
//*********************************************************
// Wait for Cordova to Load
//*********************************************************
document.addEventListener('deviceready', onDeviceReady, false);
function onDeviceReady() {

}
</script>
</head><body><div data-role='page' data-theme='b'><div data-role='header'><h1>Select Course</h1></div><div data-role='content' data-theme='b'>";
	
	
	echo	"<form method='post' action='courseHomepage.php'>";
	echo	"<div class='styled-select'><select data-theme='d' name='course'>";
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$var = $row['CourseName'];
	
	echo	"<option value={$var}>{$row['CourseName']}</option>;";
	
	}
	echo	"</select></div>";
	echo	"<input type='submit' value='Submit' /></form>";
	mysqli_free_result($result);

	mysqli_close($con);

	echo "<br>These are the courses available to you.";
	echo "<br><p>Go back to <a href='instructorInterface.php'>Homepage</a></p></div></div></body></html>";
?>