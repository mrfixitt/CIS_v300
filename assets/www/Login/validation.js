$(document).ready(function(){

	/*------START Registration Form Validation-----*/
	$('#btnRegister').click(function(){
	
		$('#registerForm').popup("open");
		
		var form = $("#regForm");
		var name = $("#name");
		var nameInfo = $("#nameInfo");
		var email = $("#email");
		var emailInfo = $("#emailInfo");
		var pass1 = $("#pass1");
		var pass1Info = $("#pass1Info");
		var pass2 = $("#pass2");
		var pass2Info = $("#pass2Info");
		var tel= $("#tel");
		var cellProvider = $("#providerMenu option:selected").text();
		var state = false;
	
	
		name.keyup(validateName);
		email.keyup(validateEmail);
		pass1.keyup(validatePass1);
		pass2.keyup(validatePass2);
	
		function validateName(){
			if(name.val().length<=4)
			{
				name.removeClass('valid');
				nameInfo.removeClass('valid');
				name.addClass("error");
				nameInfo.addClass("error");
				nameInfo.text("Username must be at least 4 characters in length");
				state = false;
			}
			else 
			{
				if(name.val().length>4)
				{
					var uname=name.val();
					$.post("./Login/validate.php", {names:uname}, function(data){
						if(data!=0){
							name.removeClass('valid');
							nameInfo.removeClass('valid');
							name.addClass("error");
							nameInfo.addClass("error");
							nameInfo.text("Username is already registered!");
							state = false;
						}
						else{
							name.removeClass('error');
							nameInfo.removeClass('error');
							name.addClass("valid");
							nameInfo.addClass("valid");
							nameInfo.text("Username is available!");
							state = true;
						}
					});
				}
			}
			return state;
		}
	
		function validateEmail(){
			var a = email.val();
			var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9._-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		
			if(filter.test(a)){
				$.post("./Login/Validate.php", {emails:a}, function(data){
					if(data!=0){
						email.removeClass('valid');
						emailInfo.removeClass('valid');
						email.addClass("error");
						emailInfo.addClass("error");
						emailInfo.text("Email already exists!");
						state = false;
					}
					else{
						email.removeClass('error');
						emailInfo.removeClass('error');
						email.addClass("valid");
						emailInfo.addClass("valid");
						emailInfo.text("Email available!");
						state= true;
					}
				});
			}
			else{
				email.removeClass('valid');
				emailInfo.removeClass('valid');
				email.addClass("error");
				emailInfo.addClass("error");
				emailInfo.text("Please type a valid email");
				state = false;
			}
			return state;
		}
	
		function validatePass1(){
			if(pass1.val().length <5){
				pass1.removeClass('valid');
				pass1Info.removeClass('valid');
				pass1.addClass("error");
				pass1Info.addClass("error");
				pass1Info.text("Please enter a password of length 6+");
				state = false;
			}
			else{
				pass1.removeClass('error');
				pass1Info.removeClass('error');
				pass1.addClass("valid");
				pass1Info.addClass("valid");
				pass1Info.text("Password is acceptable");
				state= true;
				validatePass2();
			}
			return state;
		}
	
		function validatePass2(){
			if(pass1.val()!=pass2.val()){
				pass2.removeClass('valid');
				pass2Info.removeClass('valid');
				pass2.addClass("error");
				pass2Info.addClass("error");
				pass2Info.text("Passwords do not match");
				state = false;
			}
			else{
				pass2.removeClass('error');
				pass2Info.removeClass('error');
				pass2.addClass("valid");
				pass2Info.addClass("valid");
				pass2Info.text("Passwords Match");
				state= true;		
			}
			return state;
		}
	
		$("#send").click(function(){
			var all=$("form").serialize();
			if((validateName()&validateEmail()&validatePass1()&validatePass2())==true)
			{
				$.ajax({
					type: "POST",
					url: "./Login/insert.php",
					data: all, 
					cellProviders: cellProvider,
					success: function(data){
						if(data==1){
							alert("Success! You have registered!");
							$('#registerForm').popup("close");
						}
						else{
							alert("You have errors");
						}
					}
				});
			}
			else{
				alert("Check your errors");
			}
		});
	});
	/*-----END Registration Form Validation-----*/
	
	/*-------START Login Form Verification---*/
	$('#btnLogin').click(function(){
	
		$('#loginForm').popup("open");
		$('#loginFailure').hide();
		var form2 = $("#logForm");
		var nameLogin = ("#nameLogin");
		var nameLoginInfo = $("#nameLoginInfo");
		var passLogin = $("#passLogin");
		var passLoginInfo = $("#passLoginInfo");
		var state2= false;
		
		//nameLogin.keyup(validateLoginUser());
		//passLogin.keyup(validateLoginPassword());
		
		function validateLoginUser(){
			if(nameLogin.val()==""){
				nameLogin.removeClass('valid');
				nameLoginInfo.removeClass('valid');
				nameLogin.addClass("error");
				nameLoginInfo.addClass("error");
				nameLoginInfo.text("Please enter your password");
				state2=false;
			}
			else{
				state2=true;
			}
			return state2;
		}
		
		function validateLoginPassword(){
			if(passLogin.val()==""){
				passLogin.removeClass('valid');
				passLoginInfo.removeClass('valid');
				passLogin.addClass("error");
				passLoginInfo.addClass("error");
				passLoginInfo.text("Please enter your password");
				state2 = false;
			}
			else{
				state2=true;
			}
			return state2;
		}

		
		$("#send2").click(function(){
			var all=$("form2").serialize();
			if($("#nameLogin").val()==""||$("#passLogin").val()==""){
				alert("Fill all fields");
			}
			else{
				var uname2=$("#nameLogin").val();
				var passwords2=$("#passLogin").val();
					$.post("./Login/loginCheck.php", {names:uname2, passwords:passwords2}, function(data){
						if(data==2){
							$('#loginForm').popup("close");
							window.location.replace("./InstructorInterface/InstructorInterface.php");
						}
						else if (data==1){
							$('#loginForm').popup("close");
							window.location.replace("./StudentInterface/StudentInterface.php");
						}
						else{
							//alert("Password/Username Mismatch");
							$('#loginFailure').show();
						}
					});
			}
		});
	});
	/*-------END Login Form Verification-----*/
	
});