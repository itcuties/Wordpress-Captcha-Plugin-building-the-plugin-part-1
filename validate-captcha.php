<?php
	session_start();
	
	// Get captcha value from session
	$sessionCaptcha = $_SESSION['captcha'];
	// Get captcha value from request - the one entered by user 
	$requestCaptcha = $_POST['captcha'];
	
	// Validate captcha - char size doesn't matter
	if (strCmp(strToUpper($sessionCaptcha),strToUpper($requestCaptcha)) == 0)
		echo "<div style='color: green'>OK</div>";	// Success
	else
		echo "<div style='color: red'>ERROR, you have entered '".$requestCaptcha."' and the generated captcha was '".$sessionCaptcha."'</div>";	// Error
	
	// Echo backlink
	echo "<div><a href='/'>back</a></div>";
?>