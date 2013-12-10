
<?php
	echo "<html><h1>Remove Course</h1></html>";
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
</head><body><div data-role='page' data-theme='b'><div data-role='header'><h1>Remove Course</h1>
<a href='#mnuMain' data-role='button' data-icon='bars' data-iconpos='notext' data-theme='c' data-inline='true' class='ui-btn-right'>Menu</a></div><div data-role='content' data-theme='b'>";
	
	
	
	echo 	"<form method='post' action='removeCourse.php'>";
	echo	"<select data-theme='d' name='course'>";
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$var = $row['CourseName'];
	
	echo	"<option value={$var}>{$row['CourseName']}</option>;";
	
	}
	echo	"</select>";
	echo	"<input type='submit' value='Submit' /></form>";
	mysqli_free_result($result);

	mysqli_close($con);

	echo "<br>These are the courses available to you.";
	echo "</div>
	<div data-role='panel' id='mnuMain' data-position='right' data-display='push' data-theme='a'>
				<div data-role='controlgroup' id='ctrlOne'>
					<a href='instructorInterface.php' data-role='button' data-transition='slide' data-theme='a'>Return to Homepage</a>
					<a href='../InstructorInterface/addCourseForm.php' data-role='button'>Add Course</a>
					<a href='../InstructorInterface/removeCourseForm.php' data-role='button'>Remove Course</a>
					<a href='../InstructorInterface/selectCourseInstructor.php' data-role='button'>Select Course</a>
					<a href='../InstructorInterface/editAccountFormInstructor.php' data-role='button'>Edit Account</a>
					<a href='#confirmLogOut' data-rel='popup' data-position-to='window' data-role='button' data-transition='pop' data-icon='delete'>Logout</a>
					<div data-role='popup' id='confirmLogOut' data-overlay-theme='a' data-theme='c' data-dismissable='false' style='max-width:400px;' class='ui-corner-all'>
						<div data-role='header' data-theme='a' class='ui-corner-top'>
							<h1>Sign Out?</h1>
						</div>
						<div data-role='content' data-theme='d' class='ui-corner-bottom ui-content'>
							<a href='#' data-role='button' data-inline='true' data-rel='back' data-theme='c'>No</a>
							<a href='../index.php' data-icon='check' data-role='button' data-inline='true' data-transition='flow' data-theme='b'>Yes</a>
						</div>
					</div>
			
				
				</div>
			</div><!--/panel---></div></html>";
?>