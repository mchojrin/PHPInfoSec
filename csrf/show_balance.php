<?php

session_start();

if (array_key_exists('uid', $_SESSION)) {
?>
	<p>El saldo de su cuenta es de <b><?php echo $_SESSION['balance']; ?></b></p>
<?php
	if ($_SESSION['balance'] > 0) {
?>
		<form action="make_purchase.php" method="post">
			<label for="price">Precio</label>
			<input id="price" type="number" name="price" min="1" max="<?php echo $_SESSION['balance'];?>">
			<input type="submit" value="Comprar"/>
		</form>
<?php
	}
?>
	<a href="logout.php">Salir</a>
<?php
} else {
	header('Location: login.html');
}
