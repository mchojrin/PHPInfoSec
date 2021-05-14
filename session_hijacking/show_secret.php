<?php

session_start();

if (array_key_exists('can_show_secret', $_SESSION) && $_SESSION['can_show_secret']) {
    ?>
    <h2>Tu secreto es "<?php echo $_SESSION['secret']; ?>"</h2>
    <p>No se lo cuentes a nadie!</p>
    <?php
} else {
   ?>
    <h2>¿Secreto? ¿Cu&aacute;l secreto?</h2>
<?php
}
