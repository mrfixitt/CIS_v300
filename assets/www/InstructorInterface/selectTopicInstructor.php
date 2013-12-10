
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
	
	$query = "Select topicName from topic where courseName ='{$_SESSION['course']}'";

	$result = mysqli_query($con, $query) or die('Error querying database.');
	echo 	"<html><head>
<title>Computer Information System</title>
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
</head><body><div data-role='page' data-theme='b'><div data-role='header'><h1>Topic Select</h1></div><div data-role='content'><form method='post' action='viewResult.php'>";
	echo	"<div class='styled-select'><select name='topic'>";
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$var = $row['topicName'];
	
	echo	"<option value={$var}>{$row['topicName']}</option>;";
	
	}
	echo	"</select></div>";
	echo	"<input type='submit' value='View Results' /></form>";
	mysqli_free_result($result);

	mysqli_close($con);

	echo "<br>These are the topics available to you.";
	echo "<br><p>Go back to <a href='courseHomepage.php'>Homepage</a></p></div></div></body></html>";
?>