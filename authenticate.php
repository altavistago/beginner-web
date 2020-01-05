<?php
session_start();

include 'inc/connection.php';

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	//	die ('Please fill both the username and password field!');
			header('Location: index.html');
			exit();
	if (!isset($_SESSION['loggedin'])) {
		exit();
	}
}

include 'inc/verify_user.php';

?>
