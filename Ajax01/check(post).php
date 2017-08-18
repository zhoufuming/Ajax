<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == 'admin' && $password == '123') {
		echo 2;
	}
	else {
		echo 1;
	}
?>