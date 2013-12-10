<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" charset="utf-8" src="cordova-2.9.0"></script>
<script type="text/javascript" charset="utf-8" src="jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" charset="utf-8" src="jquery/jquery.mobile-1.3.2.js"></script>
<link rel="stylesheet" type="text/css" href="jquery/css/jquery.mobile-1.3.2.css"/>

<link type="text/css" href="jquery/css/general.css" rel="stylesheet">
<script type="text/javascript" src="Login/validation.js"></script>

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
				<h1>C.I.S.</h1>
			</div>
			
			<div data-role="content" class="ui-corner-all">
				<!---------------------------Logo--------------------------------------------->
				<center><img id="logo" src="images/csudh-logo.jpg">
				<div class="center-button"><h2>Computer Interactive System</center></h2></div>
				<div/></center>
				<!-------------------------End Logo----------------------------------------->
				
				
				<input type="button" id="btnLogin" data-transition="slide" data-transition="slide" data-inline="false" data-icon="check" data-theme="b" class="center-button" value="Sign In"/>
				<input type="button" id="btnRegister" data-transition="slide" data-transition="slide" data-inline="false" data-icon="check" data-theme="d" class="center-button" value="Register" />
				<!-----------------------Registration Form--------------------------------->
				<div data-role="popup" id="registerForm" data-theme="a" class="ui-corner-all">
					<form id="regForm">
						<div style="padding:10px 20px;">
							<h3>Register</h3>
							<div>
								<label for="name" class="ui-hidden-accessible">Username:</label>
								<input id="name" name="name" placeholder="username" data-theme="a"  type="text" />
								<span id="nameInfo" name="nameInfo"></span>
							</div>
							<div>
								<label for="email" class="ui-hidden-accessible">Email:</label>
								<input id="email" name="email" placeholder="email@username.com" data-theme="a"  type="text" />
								<span id="emailInfo" name="emailInfo"></span>
							</div>
							<div>
								<label for="pass1" class="ui-hidden-accessible">Password:</label>
								<input id="pass1" name="pass1" placeholder="Password" autocomplete="off" data-theme="a"  type="password" />
								<span id="pass1Info" name="pass1Info"></span>
							</div>
							<div>
								<label for="pass2" class="ui-hidden-accessible">Verify Password</label>
								<input id="pass2" name="pass2" placeholder="Verify Password" autocomplete="off"  data-theme="a"  type="password" />
								<span id="pass2Info" name="pass2Info"></span>
							</div>
							<div>
								<input id="tel" data-clear-btn="true" name="tel" pattern="[0-9]{10}" placeholder="10-digit Phone Number (OPTIONAL)" title="10-digit Phone Number (OPTIONAL)" data-theme="a" type="tel"/>
								<label for="tel" class="ui-hidden-accessible">Phone Number</label>
								<span id="telInfo" name="telInfo">Format: 3339998888</span>
							</div>
							<div>
								<label for="providerMenu" class="ui-hidden-accessible">Provider</label>
								<select name="providerMenu" id="providerMenu">
									<option name="provider" value="@txt.att.net">AT&amp;T</option>
									<option name="provider" value="@myboostmobile.com">Boost Mobile</option>
									<option name="provider" value="@mymetropcs.com">Metro PCS</option>
									<option name="provider" value="@messaging.sprintpcs.com">Sprint</option>
									<option name="provider" value="@tmomail.net">T-Mobile</option>
									<option name="provider" value="@vtext.com">Verizon</option>
									<option name="provider" value="@vmobile.ca">Virgin Mobile</option>
								</select>
							</div>
							<div>
							<a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="c">Cancel</a>
							<input id="send" name="send" data-inline="true" type="button" data-icon="check" value="Submit" />
							</div>
							<div/>
							</div>
					</form>
				</div>
				<!-----------------------------End Registration Form-------------------------------->
				
				<!-----------------------Login Form ------------------------------------------------>
				<div data-role="popup" id="loginForm" data-theme="a" class="ui-corner-all">
					<form id="logForm">
						<div style="padding:10px 20px;">
							<h3>Login</h3>
							<div>
								<label for="nameLogin" class="ui-hidden-accessible">Username:</label>
								<input id="nameLogin" name="nameLogin" placeholder="Username" data-theme="a" type="text" />
								<span id="usernameInfo" name="usernameInfo"></span>
							</div>
							<div>
								<label for="passLogin" class="ui-hidden-accessible">Password:</label>
								<input id="passLogin" name="username" placeholder="Password" data-theme="a" type="password" autocomplete="off"/>
								<span id="passLoginInfo" name="usernameInfo"></span>
							</div>
							<div id="loginFailure">
								<label id="failure" data-theme="b">Username/Password Mismatch!</label>
							</div>
							<div>
							<a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="c">Cancel</a>
							<input id="send2" name="send2" data-inline="true" type="button" data-icon="check" value="Submit" />
							</div>
						</div>
					</form>
				</div>
				<!-----------------------End Login Form ------------------------------------------------>
				
			</div>
			
			<div data-role="footer" data-position="fixed">
				<h1>&copy; 2013 CSC 546 - CSU Dominguez Hills</h1>
			</div>
		
		</div>
	</body>
</html>