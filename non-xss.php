<?php

session_start();

if (!array_key_exists('secret', $_SESSION)){
	$secrets = require_once 'secrets.php';
	$_SESSION['secret'] = $secrets[array_rand($secrets)];
}
?>
	<h1>Hola <?php echo htmlentities($_GET['name']); ?></h1>
	<h2>Tu secreto es "<?php echo $_SESSION['secret']; ?>"</h2>
	<p>No se lo cuentes a nadie!</p>
