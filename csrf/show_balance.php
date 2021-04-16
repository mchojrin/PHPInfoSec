<?php

session_start();

if (array_key_exists('uid', $_SESSION)) {
?>
	<p>El saldo de su cuenta es de <b><?php echo $_SESSION['balance']; ?></b></p>
<?php
	if ($_SESSION['balance'] > 0) {
?>
		<p><a href="make_purchase.php">Hacer una compra</a></p>
<?php
	}
?>
	<a href="logout.php">Salir</a>
<?php
} else {
	header('Location: login.html');
}
