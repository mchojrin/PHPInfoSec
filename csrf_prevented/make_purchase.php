<?php

session_start();

if (array_key_exists('uid', $_SESSION)) {
	if (array_key_exists('csrfToken', $_POST) && $_SESSION['csrfToken'] === $_POST['csrfToken']) {
		$_SESSION['balance'] -= $_POST['price'];
	}
	
	header('Location: show_balance.php');
} else {
	header('Location: login.html');
}
