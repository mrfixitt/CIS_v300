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
		<h1>Edit Account</h1>
	</div>
	<div data-role="content">
		<form method="post" action="editAccountForm.php">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required="required"/><br />
			<label for="telephone">Telephone:</label>
			<input type="number" id="telephone" name="telephone" required="required"/><br />
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required="required"/><br />
			<input type="submit" value="Submit" name="submit" />	
		</form>
	<div data-role="footer">
		Return to <a href='studentInterface.php'>Homepage</a>
	</div>
</div>
</body>
</html>