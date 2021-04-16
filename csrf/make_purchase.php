<?php

session_start();

if (array_key_exists('uid', $_SESSION)) {
	$_SESSION['balance'] -= rand(20, $_SESSION['balance']);
	header('Location: show_balance.php');
} else {
	header('Location: login.html');
}
