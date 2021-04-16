<?php

if ($_POST['username'] === 'mauro' && $_POST['password'] === '1234') {
	session_start();
	$_SESSION = [
		'uid' => 1,
		'balance' => rand(100, 500),
	];
	header('Location: show_balance.php');	
} else {
	http_response_code(403);
	?>
		<h1>No autorizado</h1>
		<a href="login.html">Reintentar</a>
<?php
}
