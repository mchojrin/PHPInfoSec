<?php
session_start();
$_SESSION['can_show_secret'] = true;
if (!array_key_exists('secret', $_SESSION)){
    $secrets = require_once 'secrets.php';
    $_SESSION['secret'] = $secrets[array_rand($secrets)];
    ?><h2>Creando un nuevo secreto...</h2><?php
} else { ?>
            <h2>Secreto ya existente</h2>
            <?php
        }
?>
<p>Click <a href="show_secret.php">aqu&iacute;</a> para verlo</p>