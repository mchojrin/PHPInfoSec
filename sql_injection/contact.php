<?php

require_once 'connect.php';

$db = connect();

$sql = "INSERT INTO contacts (name, email, message) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['message']}')";

?>
    <p>Executing: <pre><?php echo $sql; ?></pre></p>
<?php
try {
    if ($db->exec($sql)) {
?><h1>Inserted!</h1><?php
    } else {
        ?><h1>Not inserted :( <?php echo print_r($db->errorInfo(), 1);?> </h1><?php
    }
} catch (PDOException $exception) {
    die($exception->getMessage());

}