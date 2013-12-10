<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	
	if($name!=""){
		mysql_connect("localhost","root","") or die("We couldn't connect!");
		mysql_select_db("cis");
		
		$username = mysql_query("SELECT username FROM user WHERE username='$name'");
		$count = mysql_num_rows($username);
		
		if($count!=0){
			echo 1;
		}
		else{
			echo 0";
	}
	if($email!=""){
		mysql_connect("localhost","root","") or die("We couldn't connect!");
		mysql_select_db("cis");
		
		$useremail = mysql_query("SELECT email FROM users WHERE email='$email'");
		$countemail = mysql_num_rows($useremail);
		
		if($countemail!=0){
			echo 1;
		}
		else{
			echo 0;
	}
?>