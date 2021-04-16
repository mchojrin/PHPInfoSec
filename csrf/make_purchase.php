<?php

session_start();

if (array_key_exists('uid', $_SESSION)) {
	$_SESSION['balance'] -= $_POST['price'];
	
	header('Location: show_balance.php');
} else {
	header('Location: login.html');
}
