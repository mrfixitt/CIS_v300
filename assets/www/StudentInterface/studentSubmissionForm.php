<?php 
	session_start(); 
	$_SESSION['topic'] = $_POST['topic'];
?>

<html>
<head>
	<title>Classroom Interactive System</title>
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
	<div data-role="page" data-theme="b">
		<div data-role="header">
			<h1>Student Submission Form</h1>
			<a href="#mnuMain" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-right">Menu</a>
		</div>
		<div data-role="content" class="container">
			<section>
				<form class="ac-custom ac-radio ac-fill" autocomplete="off" method="post" action="studentSubmission.php">
					<h3>Feel free to submit any feedback regarding the lecture:</h3> <br /><br />
					<div>
						<input id="r1" name="feedback" value="0" checked="checked" type="radio"><label for="r1">None</label>
						<input id="r2" name="feedback" value="1" type="radio"><label for="r2">Good</label>
						<input id="r3" name="feedback" value="2" type="radio"><label for="r3">Unclear</label>
						<input id="r4" name="feedback" value="3" type="radio"><label for="r4">Confusing</label>
						<input id="r5" name="feedback" value="4" type="radio"><label for="r5">More elaboration needed</label>
						<input id="r6" name="feedback" value="5" type="radio"><label for="r6">Terrible</label>
					</div>
					<p>Any additional comments?</p>
					<textarea name="comment" cols="20" rows="5">Enter your comments here.</textarea>
					<input type="submit" value="Submit" name="submit" data-role="button" data-inline="true" data-theme="b" class="ui-btn-right" />	
				</form>
			</section>
		</div>
		<div data-role="panel" id="mnuMain" data-position="right" data-display="push" data-theme="a">
				<div data-role="controlgroup" id="ctrlOne">
					<a href="courseHomepageStudent.php" data-role="button"><?php echo "{$_SESSION['course']}"; ?> Homepage </a>
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
	
	<div data-role="page" data-theme="a" id="feedbackPage">
		<div data-role="header" data-theme="a" id="hdComment">
			<h1>Comment</h1>
			<a href="#mnuMain" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-right">Menu</a>
		</div>
		<div data-role="content">
			<div data-role="controlgroup">
				<label for="txtComment">Comment:</label>
				<textarea cols="40" rows="10" name="comment" id="txtComment" placeholder="Enter your comments here."></textarea>
			</div>
			<div data-role="footer" data-position="fixed" data-inline="true">
				<form>
					<a href="#" data-role="button" data-rel="back" data-inline="true" data-theme="c">Cancel</a>
					<a href="#Feedback" data-role="button" data-inline="true" data-theme="b" class="ui-btn-right">Submit</a>
				</form>
			</div>
			
		<div>
	</div>
<!--script src="../js/svgcheckbx.js"></script-->

</body>
</html>


