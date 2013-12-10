<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" charset="utf-8" src="../cordova-2.9.0"></script>
<script type="text/javascript" charset="utf-8" src="../jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" charset="utf-8" src="../jquery/jquery.mobile-1.3.2.js"></script>
<!--script type="text/javascript" src="my_script.js"></script>
<script type="text/javascript" src="../js/register.js"></script-->
<link rel="stylesheet" type="text/css" href="../jquery/css/jquery.mobile-1.3.2.css"/>
<link type="text/css" href="general.css" rel="stylesheet">
<script type="text/javascript" src="validation.js"></script>

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
				<h1>Register</h1>
			</div>
			<div data-role="content" data-theme="a" class="ui-corner-all">
				<div id="container">
				<form id="customForm">
					<div style="padding:10px 20px;">
					<div>
						<label for="name" class="ui-hidden-accessible">Username</label>
						<input id="name" name="name" placeholder="username" data-theme="a"  type="text" />
						<span id="nameInfo" name="nameInfo">Please enter a username</span>
					</div>
					<div>
						<label for="email" class="ui-hidden-accessible">Email</label>
						<input id="email" name="email" placeholder="email@username.com" data-theme="a"  type="text" />
						<span id="emailInfo" name="emailInfo">Please enter an e-mail</span>
					</div>
					<div>
						<label for="pass1" class="ui-hidden-accessible">Password</label>
						<input id="pass1" name="pass1" placeholder="Password" autocomplete="off" data-theme="a"  type="password" />
						<span id="pass1Info" name="pass1Info">Please enter a password</span>
					</div>
					<div>
						<label for="pass2" class="ui-hidden-accessible">Verify Password</label>
						<input id="pass2" name="pass2" placeholder="Verify Password" autocomplete="off"  data-theme="a"  type="password" />
						<span id="pass2Info" name="pass2Info">Re-enter your password</span>
					</div>
						<input id="send" name="send" type="button" data-icon="check" value="Send" />
					<div>
					</div>
					</div>
				</form>
				</div>
			</div>
			<div data-role="footer" data-position="fixed">
				<h1>&copy; 2013 CSC 546 - CSU Dominguez Hills</h1>
			</div>
		
		</div>
	
	</body>
</html>