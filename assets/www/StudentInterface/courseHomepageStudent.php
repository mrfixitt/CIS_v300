<?php
	require_once('../databaseVariables.php');
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
//	session_start();
	if (ISSET($_POST['course'])){
		$_SESSION['course']= $_POST['course'];
		if(!ISSET($_SESSION['course'])) {
			$_SESSION['course'] = $course;
		}
	}
	
		
	
?>

<html>
	<head>
		<title><?php echo "{$_SESSION['course']}"; ?> Homepage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" charset="utf-8" src="../cordova-2.9.0"></script>
		<script type="text/javascript" charset="utf-8" src="../jquery/jquery-1.10.2.js"></script>
		<script type="text/javascript" charset="utf-8" src="../jquery/jquery.mobile-1.3.2.js"></script>
		<link rel="stylesheet" type="text/css" href="../jquery/css/jquery.mobile-1.3.2.css"/>
		<!--link type="text/css" href="jquery/css/general.css" rel="stylesheet"-->
		<script type="text/javascript" charset="utf-8">
		//*********************************************************
		// Wait for Cordova to Load
		//*********************************************************
		document.addEventListener("deviceready", onDeviceReady, false);
		function onDeviceReady() {

		}
		</script>
	</head>
	<body>
		<div data-role="page" data-theme="d">
			<div data-role="header">
				<h1><?php echo "{$_SESSION['course']}"; ?> Homepage</h1>
				<a href="#mnuMain" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-right">Menu</a>
			</div>
			<div data-role="content" id="navcontainer">
				<ul>
				<li><h3><?php echo "{$_SESSION['course']}"; ?> Homepage</h3></li>
				<li><a href="../StudentInterface/selectTopicStudent.php">Select Topic</a></li>
				</ul>
			</div>
			<div data-role="panel" id="mnuMain" data-position="right" data-display="push" data-theme="a">
				<div data-role="controlgroup" id="ctrlOne">
					<a href="../StudentInterface/selectCourseStudent.php" data-role="button">Select Course</a>
					<a href="../StudentInterface/editAccountFormStudent.php" data-role="button">Edit Account</a>
					<a href="#confirmLogOut" data-rel="popup" data-position-to="window" data-role="button" data-transition="pop" data-icon="delete">Logout</a>
					<div data-role="popup" id="confirmLogOut" data-overlay-theme="a" data-theme="c" data-dismissable="false" style="max-width:400px;" class="ui-corner-all">
						<div data-role="header" data-theme="a" class="ui-corner-top">
							<h1>Sign Out?</h1>
						</div>
						<div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
							<a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="c">No</a>
							<a href="../index.php" data-icon="check" data-role="button" data-inline="true" data-transition="flow" data-theme="b">Yes</a>
						</div>
					</div>
			
				
				</div>
			</div><!--/panel--->
		</div>
	</body>
</html>

