<?php
session_start();
?>
<h1>Hola <?php echo htmlentities($_GET['name']); ?></h1>
<?php
if (!array_key_exists('secret', $_SESSION)){
$secrets = require_once 'secrets.php';
$_SESSION['secret'] = $secrets[array_rand($secrets)];
?><h2>Creando un nuevo secreto...<h2><?php
        } else { ?>
            <h2>Secreto ya existente</h2>
            <?php
        }
        ?>
        <h2>Tu secreto es "<?php echo $_SESSION['secret']; ?>"</h2>
        <p>No se lo cuentes a nadie!</p>